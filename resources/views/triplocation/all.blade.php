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
                        <td>Action</td>
                    </tr>

                    @foreach ($triplocations as $key => $triploc)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $triploc->trips->name ?? "" }}</td>
                            
                            <td>
                                <a class="btn btn-info mb-2" href="{{ route('triplocation.edit', $triploc->id) }}">Edit</a>
                                <a class="btn btn-info mb-2" href="{{ route('triplocation.destroy', $triploc->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
