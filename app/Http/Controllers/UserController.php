<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        //return view('layouts.data-table-layout', get_defined_vars());
        return view('user.all', get_defined_vars());
    }
    //public function index()
    //{
    //    if (request()->ajax()) {
    //        //return DataTables::eloquent(User::query())->toJson();
    //        return DataTables::eloquent(User::query())->make(true);
    //    }
    
    //    return view('layouts.data-table-layout');
    //}
    public function Create(){
        return view('user.create');
    }
    public function CreateUser(Request $request)
    {
        $user = new User;
        $alidtuser= $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
       $user->name = $request->input('name');
       $user->address = $request->input('address');
       $user->phone = $request->input('phone');
       $user->email = $request->input('email');
       $user->password = $request->input('password');
       $user->save();
       return redirect()->route('/')->with('message','User created successfully');
    }

    public function EditeUser($id){
        $user = User::find($id);
        return view('user.edit', get_defined_vars());
    }
    public function UpdateUser(Request $request, $id){
        $user = User::find($id);
        $alidtuser= $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);
       $user->name = $request->input('name');
       $user->address = $request->input('address');
       $user->phone = $request->input('phone');
       $user->email = $request->input('email');
       $user->password = $request->input('password');
       $user->update();
       return redirect()->route('/')->with('message','User created successfully');

    }

    public function DeleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('/')->with('message','User Delete successfully');
    }

}
    