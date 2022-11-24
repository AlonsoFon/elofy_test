<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Redirect;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	return view("welcome");
    }

    public function login(Request $request)
    {
    	$validated = $request->validate([
        	'email' => 'required|unique:clients|max:191',
        	'password' => 'required|min:6',
    	]);
    	$email = $request->get("email");
    	$password = $request->get("password");
    	$Client = Client::create([
    		"email" => $email,
    		"password" => bcrypt($password),
    	]);
    	if(!isset($Client)){
    		return Redirect::back()->withErrors(['msg' => 'Something went wrong, please try again!']);
    	}

    	return Redirect::back()->with('sucess', 'Login was been sucessfuly!');
    	dd($request->all());
    }
}
