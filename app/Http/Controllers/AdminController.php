<?php

namespace App\Http\Controllers;

use App\Admin;
// use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
// use Auth;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function store(Request $request)
    {
    	$admin = new Admin;
    	$admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = bcrypt($request->password);
    	$admin->phone = $request->phone;
    	$admin->save();
    	return view('admin.index')->with('success','Successfully Added');
    }

    public function loginindex()
    {
    	return view('admin.login');
    }

    public function login(Request $request)
    {
    	
	    	$email = $request->email;
	    	$password = $request->password;
    	

    	if(\Auth::guard('admin')->attempt(['email' => $email , 'password' => $password ]))
    	{
    		return redirect('/admin');
    	}
    	else
    	{
    		return "wrong";
    	}
    }
}
