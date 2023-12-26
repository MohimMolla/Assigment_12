@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="col-md-10">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <a class="btn btn-info mb-2" href="{{route('create_user')}}">Create user</a>
                    
                    

                    <table class="table table-striped">
                        <tr>
                            <td>SL</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Phone</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>

                        @foreach ($users as $key=>$user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td> 
                                <td>
                                    <a class="btn btn-info mb-2" href="{{route('uesr_edit',$user->id)}}">Edit</a>
                                    <a class="btn btn-info mb-2" href="{{route('delete_user',$user->id)}}">Delete</a>
                                </td>
                                
                           </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>
    @endsection
