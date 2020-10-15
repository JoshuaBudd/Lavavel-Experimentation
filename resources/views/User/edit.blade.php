@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach()
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit User <a href="{{ route('user.index') }}" class="label label-primary pull-right">Back</a>
                </div>
                <div class="panel-body">
                    <form action="{{ route('user.update', $user->userid) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">
                                <input type="number" name="age" id="age" class="form-control" value="{{ $user->age }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="sex" id="sex" class="form-control" value="{{ $user->sex }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="Update User" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
