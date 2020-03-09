<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_type = ['chat','dance','drink','toilet'];
        $faker = Faker::create();
    	foreach (range(1,300) as $index) {
            $clubber_id = rand(1, 100);
            $target_clubber_id = rand(1, 100);
            $choose_event_type = rand(0,3);
            if ($event_type[$choose_event_type] == "toilet") {
                $target_clubber_id = 0;
            } 
	        DB::table('events')->insert([
                'clubber_id'=> $clubber_id,
                'target_clubber_id' => $target_clubber_id,
                'event_type' => $event_type[$choose_event_type],
                'created_at' => Carbon::now()
	        ]);
	    }
    }
}