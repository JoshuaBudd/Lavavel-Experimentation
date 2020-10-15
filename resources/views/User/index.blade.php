@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('success_msg'))
                <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
            @endif
        <!-- User's list -->
            @if(!empty($user))
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>User's List </h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('user.add') }}"> Add New</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <table class="table table-striped task-table">
                            <!-- Table Headings -->
                            <thead>
                            <th width="25%">Title</th>
                            <th width="40%">Content</th>
                            <th width="15%">Created</th>
                            <th width="20%">Action</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                            @foreach($user as $user)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$user->name}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$user->age}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$user->sex}}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{$user->email}}</div>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.details', $user->id) }}" class="label label-success">Details</a>
                                        <a href="{{ route('user.edit', $user->id) }}" class="label label-warning">Edit</a>
                                        <a href="{{ route('user.delete', $user->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
