<?php

use Illuminate\Database\Seeder;

class KadusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		['name'=>'Mudriyanto'],
    		['name'=>'Bambang'],
    		['name'=>'Tauhid'],
    		['name'=>'Sugeng'],
    		['name'=>'Sukeri'],
    		['name'=>'Pramono'],
    		['name'=>'Rokhamin']

    	];
    	foreach($data as $tes)
    		DB::table('kaduses')->insert($tes);
    }
}
