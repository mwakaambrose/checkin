<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\HomeModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function checkin()
    {

        //get currently signed in users username

        $name = Auth::user()->name;

        //Initialise the carbon date object.

        $date = Carbon::now();

        //check if the user has already checked in for today.

        $result = DB::table('checkins')->where([['date', '=', $date->toDateString()], ['name', '=', $name]])->first();

        if ($result)
        {
            $message = "You have already checked in. Thankyou.";
            $checks = DB::table('checkins')->where('date', '=', $date->toDateString())->get();

            return view('home', compact('checks','message'));
        }


        //fix the carbon chickin time
        //and check out.

        $checks = array(
            array(

                'name' => $name ,
                'date' => $date->toDateString() ,
                'checkin' => $date->toTimeString() ,
                'checkout' => '-'
            )
        );

        //Mysql date doesnt support Carbons toFormattedDateString(). Why?

        DB::table('checkins')->insert($checks);

        $checks = DB::table('checkins')->where('date', '=', $date->toDateString())->get();

        return view('home', compact('checks'));
    }

    public function checkout()
    {


        $date = Carbon::now();

        DB::table('checkins')->where('date', $date->toDateString())->update(['checkout' => $date->toTimeString()]);

        $checks = DB::table('checkins')->where('date', '=', $date->toDateString())->get();

        return view('home', compact('checks'));

    }
}
