<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class NavigationController extends Controller
{
	public function home()
	{
		return view('home');
	}

	public function faq()
	{
		return view('faq');
	}

	public function login()
	{
		return view('login');
	}

	public function profile()
	{
		return view('profile');
	}

	public function logout()
    {
        Auth::logout();
        return redirect('home');
    }

}
