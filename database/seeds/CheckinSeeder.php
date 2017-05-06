<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CheckinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generate the users dummy checkins.
     * @return void
     */
    public function run()
    {

        DB::table('checkins')->delete();

        //Todo add another entry for tommorrows date.
        //and learn how to make carbon do it for you.
        $checks = array(
        	array(

        		'name' => 'Ambrose' ,
        		'date' => Carbon::now() ,
        		'checkin' => '8:25:56' ,
        		'checkout' => '5:58:02'
        	),
        	array(

        		'name' => 'Jamal' ,
        		'date' => Carbon::now() ,
        		'checkin' => '8:52:56' ,
        		'checkout' => '5:12:04'
        	),
        	array(

        		'name' => 'Corey' ,
        		'date' => Carbon::now() ,
        		'checkin' => '8:52:56' ,
        		'checkout' => '5:12:04'
        	),
        	array(

        		'name' => 'Fredrick' ,
        		'date' => Carbon::now() ,
        		'checkin' => '8:21:12' ,
        		'checkout' => '5:25:08'
        	),
        	array(

        		'name' => 'Alfred' ,
        		'date' => Carbon::now() ,
        		'checkin' => '9:22:56' ,
        		'checkout' => '5:05:08'
        	)


        );

        DB::table('checkins')->insert($checks);
    }
}
