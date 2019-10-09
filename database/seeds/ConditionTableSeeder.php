<?php

use Illuminate\Database\Seeder;
use App\Condition;

class ConditionTableSeeder extends Seeder
{

    public function run()
    {
        $condition = new Condition();
        $condition->name = 'Cancelado';
        $condition->save();

        $condition = new Condition();
        $condition->name = 'Abonado';
        $condition->save();

        $condition = new Condition();
        $condition->name = 'Sin cancelar';
        $condition->save();
    }
}
