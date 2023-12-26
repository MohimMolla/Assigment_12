<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
   public function index(){
    $trips = Trip::all();
    return view('trip.all',get_defined_vars());
   }

   public function Create(){
    return view('trip.create');
   }

   public function CreateTrip(Request $request){
    $request->validate([
        'name' => 'required'
    ]);
    $trip = new Trip();
    $trip->name = $request->name;
    $trip->save();
    return redirect()->route('trip')->with('message','Trips created successfully');
    }

   public function EditTrip($id){
    $trip = Trip::find($id);
    return view('trip.edit',get_defined_vars());
   }
   public function UpdateTrip(Request $request, $id){
    $trip = Trip::find($id);
    $trip->name = $request->name;
    $trip->update();
    return redirect()->route('trip')->with('message','Trips updated successfully');

   }

   public function DeleteTrip($id){
    $trip = Trip::find($id);
    $trip->delete();
    return redirect()->route('trip')->with('message','Trips Delete successfully');
   }

}
