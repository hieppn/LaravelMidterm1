<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RommSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<10;$i++){
        DB::table('rooms')->insert([
        	'name'=> $faker->name,
            'typeroom'=>$faker->name,
            'image' => 'abc.jpg',
            'number'=>$faker->name,
            'area'=> 45,
            'price'=>100000,
            ]);
        }
    }
}
