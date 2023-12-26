@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <a class="btn btn-info mb-2" href="{{ route('create_trip') }}">Create trip</a>



                <table class="table table-striped">
                    <tr>
                        <td>SL</td>
                        <td>Name</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($trips as $key => $trip)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $trip->name }}</td>
                            
                            <td>
                                <a class="btn btn-info mb-2" href="{{ route('trip_edit', $trip->id) }}">Edit</a>
                                <a class="btn btn-info mb-2" href="{{ route('delete_trip', $trip->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
