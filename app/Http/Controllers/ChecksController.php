<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkin;


class ChecksController extends Controller{

	/** Gets and returns daily checks */
    public function all(){
    	$checks = Checkin::allchecks();
    	return view('checks/checks', compact('checks'));
    }

    /** Gets and returns all of the users checks */
    public function mychecks($name){	
		$checks = Checkin::mychecks($name);
		return view('checks/mychecks', compact('checks', 'name'));
    }
}
