<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FinalRegisterController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
    	if(Auth::user()->driver == '1'){
			return view('registerfinal');
		}else{
			return redirect('profile');
		}
        
    }
}
