<?php

namespace App\Http\Controllers;

use App\Writer;
use Illuminate\Http\Request;
use Auth;
class WriterController extends Controller
{
	public function __construct()
	{
		// $this->middleware('authwriter');
	}

    public function index()
    {
    	return view('writer.index');
    }

    public function store(Request $request)
    {
    	$writer = new Writer;
    	$writer->name = $request->name;
    	$writer->email = $request->email;
    	$writer->password = bcrypt($request->password);
    	$writer->save();
    	return redirect('/writer');
    }

    public function loginindex()
    {
    	if(Auth::guard('writer')->check())
    	{
    		return redirect()->route('profile');
    	}
    	return view('writer.login');
    }

    public function login(Request $request)
    {
    	if(Auth::guard('writer')->attempt(['email'=>$request->email , 'password'=>$request->password])){
    		return redirect()->route('profile');
    	}
    	else
    	{
    		return 'wrong';
    	}
    }

    public function profile()
    {
    	return view('writer.profile');
    }

}
