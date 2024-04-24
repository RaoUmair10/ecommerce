<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function register(){
       return view('register');
    }
    public function save(Request $req){
       $req->validate([
          'Username'=>'required',
          'Email'=>'required',
          'Password'=>'required'
       ]);

       $user = new User();
       $user->Username = $req->input('Username');
       $user->Email = $req->input('Email');
       $user->Password = $req->input('Password');

       $user->save();
       return redirect('/login');

    }
    public function login(){
        return view('login');
    }
    public function loginin(Request $req){
    $user = User::where('Email',$req->input('Email'))->where('Password',$req->input('Password'))->first();
     session(['admin'=>$user]);

    if($user){
        return redirect('/');
    }else{
        return redirect('/login')->with('error','password and Email Not Matched');
    }

    }
    public function logout(){
        session()->forget('admin');
        return redirect('/login');
    }
}
