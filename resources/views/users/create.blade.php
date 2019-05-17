@extends('users.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <form action="{{route('users.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="full_name" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>Password:</strong>
                    <input type="text" name="password" class="form-control" placeholder="Password">
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Address">
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>Role:</strong>
                    <input type="text" name="role" class="form-control" placeholder="Role">
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Add New</button>
            </div>
        </div>
    </form>
@endsection
