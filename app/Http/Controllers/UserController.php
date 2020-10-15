<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;

class UserController extends Controller
{

    public function index(){
        //fetch all user data
        $user = user::orderBy('userid','desc')->get();

        //pass user data to view and load list view
        return view('user.index', ['user' => $user]);
    }

    public function details($userid){
        //fetch user data
        $user = User::find($userid);

        //pass user data to view and load list view
        return view('user.details', ['user' => $user]);
    }

    public function add(){
        //load form view
        return view('user.add');
    }

    public function insert(Request $request){
        //validate user data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //get user data
        $userData = $request->all();

        //insert user data
        User::create($userData);

        //store status message
        Session::flash('success_msg', 'user added successfully!');

        return redirect()->route('user.index');
    }

    public function edit($userid){
        //get user data by id
        $user = User::find($userid);

        //load form view
        return view('user.edit', ['user' => $user]);
    }

    public function update($userid, Request $request){
        //validate user data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //get user data
        $userData = $request->all();

        //update user data
        User::find($userid)->update($userData);

        //store status message
        Session::flash('success_msg', 'user updated successfully!');

        return redirect()->route('user.index');
    }

    public function delete($userid){
        //update user data
        User::find($userid)->delete();

        //store status message
        Session::flash('success_msg', 'user deleted successfully!');

        return redirect()->route('user.index');
    }

}
