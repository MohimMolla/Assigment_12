@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-10">
            <form method="POST" action="{{ route('triplocation.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="trip_from" class="form-label">Trip From</label>
                    <select class="form-control" name="trip_from" id="trip_from">
                        @foreach ($trips as $trip)
                            <option value="{{$trip->id}}">{{$trip->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="trip_to" class="form-label">Trip To</label>
                    <select class="form-control" name="trip_to" id="trip_to">
                        {{-- Exclude the selected trip from the "Trip From" dropdown --}}
                      
                        @foreach ($trips as $trip)
                        {{--{{dd(old());}}--}}
                            @if (old('trip_from') != $trip->id)
                                <option value="{{ $trip->id }}">{{ $trip->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            
                <!-- Change this button type to "submit" -->
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
           </div>
        </div>
    </div>
@endsection
