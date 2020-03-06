<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PerceptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,300) as $index) {
            $clubber_id = rand(1, 100);
            $target_clubber_id = rand(1, 100);
            $bizarre_alluring =  rand(-100, 100);
            $introvert_exuberant = rand(-100, 100);
	        DB::table('perceptions')->insert([
                'clubber_id'=> $clubber_id,
                'target_clubber_id' => $target_clubber_id,
                'bizarre_alluring' => $bizarre_alluring,
                'introvert_exuberant' => $introvert_exuberant
	        ]);
	    }
    }
}
