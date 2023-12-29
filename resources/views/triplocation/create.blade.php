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
                        <option value="">Select Location From</option>
                        @foreach ($trips as $trip)
                            <option value="{{$trip->id}}">{{$trip->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="trip_to" class="form-label">Trip To</label>
                    <select class="form-control" name="trip_to" id="trip_to">
                        <option value="">Select Location To</option>
                        {{-- Exclude the selected trip from the "Trip From" dropdown --}}
                      
                        {{--@foreach ($trips as $trip)
                        
                            @if (old('trip_from') != $trip->id)
                                <option value="{{ $trip->id }}">{{ $trip->name }}</option>
                            @endif
                        @endforeach--}}
                    </select>
                </div>
                <div class="mb-3">
                    <label for="trip_location_name" class="form-label">Trip Location Name</label>
                    <input type="text" name="trip_location_name" class="form-control" id="trip_location_name"
                        value="{{ old('trip_location_name') }}">
                    @error('trip_location_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Change this button type to "submit" -->
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
           </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {       
        updateTripToOptions();
      
        $('#trip_from').change(function () {
            updateTripToOptions();
        });

        function updateTripToOptions() {
            var selectedTripFrom = $('#trip_from').val();            
            $('#trip_to').empty();           
            @foreach ($trips as $trip)
                if ("{{ $trip->id }}" !== selectedTripFrom) {
                    $('#trip_to').append('<option value="{{ $trip->id }}">{{ $trip->name }}</option>');
                }
            @endforeach
        }
    });
</script>
@endsection
