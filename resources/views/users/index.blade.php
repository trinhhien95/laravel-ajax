@extends('users.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('users.create')}}" class="btn btn-success">Create New Products</a>
            </div>
        </div>
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Role</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->full_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->role}}</td>
                    <td>
                        <form action="{{route('users.destroy',$user->id)}}" method="post" role="form">
                            <a href="{{route('users.show',$user->id)}}" class="btn btn-info">Show</a>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>