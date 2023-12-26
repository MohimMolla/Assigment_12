@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-10">
            <form method="POST" action="{{ route('create_user') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address"
                        value="{{ old('address') }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                        id="" value="{{ old('password') }}">
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
