<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\TripLocation;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TripLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $triplocations = TripLocation::with('fromTrip', 'toTrip')->get();
        return view('triplocation.all', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trips = Trip::all();
        return view('triplocation.create', compact('trips'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //try {
        $triplocation = TripLocation::create($request->all());
        return redirect()->route('triplocation.index')->with('message', 'Trip Location Information created successfully');
        //} catch (QueryException $exception) {
        //    $errorMessage = $exception->getMessage();
        //    return redirect()->route('triplocation.index')->with('message', "Could not create Duplicate Location");
        //}
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
    public function edit(TripLocation $tripLocation, $id)
    {

        $tripLocation = TripLocation::with('fromTrip', 'toTrip')->find($id);
        if ($tripLocation) {
            $trips = Trip::all();
            return view('triplocation.edit', get_defined_vars());
        } else {

            return redirect()->route('triplocation.edit')->with('error', 'Trip Location not found');
        }
    }
    //    public function edit(TripLocation $tripLocation)
    //{
    //    return $tripLocation->id;
    //}


    public function update(Request $request, TripLocation $tripLocation, $id)
    {
        $tripLocation = TripLocation::with('fromTrip', 'toTrip')
       ->find($id);
       $tripLocation->update($request->all());
       return redirect()->route('triplocation.index')->with('success', 'Trip Location Information Updated successfully');
    }


    public function destroy(TripLocation $tripLocation)
    {
    }
    public function Delete($id)
    {
        $tripLocation = TripLocation::find($id);
        $tripLocation->delete();
        return redirect()->back()->with('sucess', 'Trip Location deleted successfully');
    }
}
