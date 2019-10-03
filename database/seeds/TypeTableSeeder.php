<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeTableSeeder extends Seeder
{

    public function run()
    {
        $type = new Type();
        $type->name = 'Casa';
        $type->save();

        $type = new Type();
        $type->name = 'Apartamento';
        $type->save();
    }
}
