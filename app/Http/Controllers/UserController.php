<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;

class UserController extends Controller
{

    public function index(){
        //fetch all user data
        $user = user::orderBy('id','desc')->get();

        //pass user data to view and load list view
        return view('user.index', ['user' => $user]);
    }

    public function details($id){
        //fetch user data
        $user = User::find($id);

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

    public function edit($id){
        //get user data by id
        $user = User::find($id);

        //load form view
        return view('user.edit', ['user' => $user]);
    }

    public function update($id, Request $request){
        //validate user data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //get user data
        $userData = $request->all();

        //update user data
        User::find($id)->update($userData);

        //store status message
        Session::flash('success_msg', 'user updated successfully!');

        return redirect()->route('user.index');
    }

    public function delete($id){
        //update user data
        User::find($id)->delete();

        //store status message
        Session::flash('success_msg', 'user deleted successfully!');

        return redirect()->route('user.index');
    }

}
