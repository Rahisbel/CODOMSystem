<?php

use Illuminate\Database\Seeder;
use App\Provider;

class ProviderTableSeeder extends Seeder
{

    public function run()
    {
        $provider = new Provider();
        $provider->name = 'Agua';
        $provider->price = 10000;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Electricidad';
        $provider->price= 10000;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Aseo';
        $provider->price= 10000;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Vigilancia';
        $provider->price= 10000;
        $provider->save();        

        $provider = new Provider();
        $provider->name = 'Piscina';
        $provider->price= 10000;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Jardineria';
        $provider->price= 10000;
        $provider->save();        
    }
}
