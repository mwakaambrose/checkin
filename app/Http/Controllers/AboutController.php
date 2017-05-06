<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$abouts = [
			'Checkin your arrival time',
			'Checkout when going out',
			'Boss? manage your employees time the right way.'
		];

		return view('about', compact('abouts'));
    }
}
