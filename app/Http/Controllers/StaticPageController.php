<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class StaticPageController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['showBlogsPage']);
    }


	/**
	 * Render the About Page
	 *
	 * @return View from \resources\views\static\about
	 */
	public function showAboutPage()
	{
		$currentRoute = Route::current()->uri();
		$currentRoute = strtoupper($currentRoute);
		return view('static.about')->with('currentRoute', $currentRoute);
	}


	/**
	 * Render the Contact Page
	 *
	 * @return View from \resources\views\static\contact
	 */
	public function showContactPage()
	{
		$mobile = "+91-0123456789";
		$email = "email@rpshah.me";
		
		// return view('static.contact')->with('email' , $email)->withMobile($mobile);
		// or
		return view('static.contact', ['email' => $email, 'mobile' => $mobile]);

	}

}
