<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function store(Request $request){
        
        return User::updateOrCreate(['id' => $request->id], 
        [
            "name" => $request->name,
            "email" => $request->email=rand(50,100)."-".rand(50,100)."@test.com",
            "username" => $request->username,
            "password" => Hash::make("password"),
        ]);
    }

    public function getUser(){
        return response()->json(User::where('user_type',0)->get());
    }
    public function edit($id){
        return response()->json(User::find($id));
    }
    public function destroy($id)
    {
        return User::destroy($id);
    }
}
