@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-10">
            <form method="POST" action="{{ route('CreateTrip',$trip->id) }}">
                @csrf
	      @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{ $trip->name }}">
                    @error('name')
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
