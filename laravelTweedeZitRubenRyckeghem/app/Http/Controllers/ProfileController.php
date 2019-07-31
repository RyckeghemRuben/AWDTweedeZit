<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function getIndex(){
        $user = Auth::user();
        return view('content.profile',['user'=> $user]);
    }

    public function postUpdateProfile(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' =>'required'
        ]);

        //haal aan te passen item op uit database
        $user = Auth::user();

        //pas waarden aan
        $user->name =$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');

        $user->save();


        return redirect()->route('profile');
    }

}
