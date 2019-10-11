<?php

use Illuminate\Database\Seeder;
use App\Provider;

class ProviderTableSeeder extends Seeder
{

    public function run()
    {
        $provider = new Provider();
        $provider->name = 'Agua';
        $provider->price = 256300;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Electricidad';
        $provider->price = 466300;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Aseo';
        $provider->price= 785241;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Vigilancia';
        $provider->price= 896521;
        $provider->save();        

        $provider = new Provider();
        $provider->name = 'Piscina';
        $provider->price= 756321;
        $provider->save();

        $provider = new Provider();
        $provider->name = 'Jardineria';
        $provider->price= 895656;
        $provider->save();        
    }
}
