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

                <a class="btn btn-info mb-2" href="{{ route('triplocation.create') }}">Create Trip Location</a>



                <table class="table table-striped">
                    <tr>
                        <td>SL</td>
                        <td>Location From</td>
                        <td>Location To</td>
                        <td>Route Name</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($triplocations as $key => $triploc)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            {{-- <td>{{ $triploc->id }}</td> --}}
                            <td>{{ $triploc->fromTrip->name ?? '' }}</td>
                            <td>{{ $triploc->toTrip->name ?? '' }}</td>
                            <td>{{ $triploc->trip_location_name ?? '' }}</td>

                            <td>
                                <a class="btn btn-info mb-2" href="{{ route('triplocation.edit', $triploc->id) }}">Edit</a>
                                <a onclick="return confirm('Are you sure to delete this')" class="btn btn-info mb-2"
                                    href="{{ route('trip-location-delet', $triploc->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
