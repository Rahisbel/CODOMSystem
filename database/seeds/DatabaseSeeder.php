<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Property;
use App\Condition;
use App\Invoice;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call(RoleTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
        $this->call(ConditionTableSeeder::class);

        factory(User::class,7)->create(); // genera 7 usuarios aleatorios en la DB

        User::create([

        	'name' =>'Rahisbel',
 			'email'=>'ryhn236@gmail.com',
       	 	'password' => bcrypt('12345678'),
            'role_id'=> 1
        ]);

        User::create([

        	'name' =>'Jesus',
 			'email'=>'jesus@gmail.com',
       	 	'password' => bcrypt('12345678'),
            'role_id'=> 1
        ]);

        User::create([

        	'name' =>'Francisco',
 			'email'=>'pacho@gmail.com',
       	 	'password' => bcrypt('12345678'),
            'role_id'=> 2
        ]);


        factory(Property::class,7)->create();
        factory(Invoice::class,7)->create();
    }
}
