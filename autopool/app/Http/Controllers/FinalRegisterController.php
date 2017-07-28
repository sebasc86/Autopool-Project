<?php

namespace App\Http\Controllers;

use App\Car;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function store()
    {

	    $this->validate(request(), [
	      'document' => 'required',
	      'phone' => 'required',
	      'trademark' => 'required',
	      'model' => 'required',
	      'year' => 'required',
	      'color' => 'required',
	      'license_plate' => 'required',
	      'capacity' => 'required',	    
	      ]);


	    $user = User::find(Auth::user()->id);
	    $user->document = request()->document;
	    $user->phone = request()->phone;
	    $user->update();
	   	Car::create([
	    	'user_id' => Auth::user()->id,
	    	'trademark' => request('trademark'),
	    	'model' => request('model'),
	    	'year' => request('year'),
	    	'color' => request('color'),
	    	'license_plate' => request('license_plate'),
	    	'capacity' => request('capacity'),
	    	]);
	    

	    
	    return redirect('profile');	    
  	}

    
}
