<?php

use Illuminate\Database\Seeder;

class DusunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
    		['name'=>'Ampelgading', 'kadus_id'=> 5, 'Latitude'=> -7.2268274,'Longitude'=>110.3874583],
    		['name'=>'Karanglo', 'kadus_id'=>1, 'Latitude'=> -7.2232268,'Longitude'=>110.3991875],
    		['name'=>'Clowok', 'kadus_id'=>2, 'Latitude'=> -7.2269803,'Longitude'=>110.3946826],
    		['name'=>'Gelaran', 'kadus_id'=>3, 'Latitude'=> -7.232762,'Longitude'=>110.3884532],
    		['name'=>'Kenteng', 'kadus_id'=>4, 'Latitude'=> -7.2308289,'Longitude'=>110.3939133],
    		['name'=>'Jurang', 'kadus_id'=>6, 'Latitude'=> -7.2294631,'Longitude'=>110.4001442],
    		['name'=>'Golak', 'kadus_id'=>7, 'Latitude'=> -7.2215465,'Longitude'=>110.3902476]

    	];
    	foreach($data as $dusun){
    		DB::table('dusuns')->insert($dusun);
    	}
    }
}
