@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-10 mx-auto">
                <form method="POST" action="{{ route('update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                            value="{{ $user->phone }}">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address"
                            value="{{ $user->address }}">
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ $user->email }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" id=""
                            value="{{ $user->password }}">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <!-- Change this button type to "submit" -->
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection
