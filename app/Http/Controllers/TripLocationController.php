<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\TripLocation;
use App\Models\User;
use Illuminate\Http\Request;

class TripLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$trip = Trip::get();
        $triplocations = TripLocation::with('fromTrip', 'toTrip')->get();
         return view('triplocation.all', get_defined_vars());

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trips = Trip::all();
       return view('triplocation.create',compact('trips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TripLocation $tripLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TripLocation $tripLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TripLocation $tripLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TripLocation $tripLocation)
    {
        //
    }
}
