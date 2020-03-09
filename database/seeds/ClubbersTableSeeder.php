<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClubbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
            $money = rand(0, 300);
            $anxious_satisfied = rand(-100, 100);
            $bizarre_alluring =  rand(-100, 100);
            $introvert_exuberant = rand(-100, 100);
	        DB::table('clubbers')->insert([
                'name' => $faker->name,
                'money'=> $money,
                'anxious_satisfied' => $anxious_satisfied,
                'bizarre_alluring' => $bizarre_alluring,
                'introvert_exuberant' => $introvert_exuberant
	        ]);
	    }
    }
}
