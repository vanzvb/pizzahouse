<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class PizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = [
            [
                'type' => 'Hawaiian',
                'base' => 'cheesy crust',
                'name' => 'luigi'
            ],
            [
                'type' => 'mozerela',
                'base' => 'garlic crust',
                'name' => 'mario'
            ],
            [
                'type' => 'volcano',
                'base' => 'thin & crispy',
                'name' => 'yoshi'
            ],
        ];

        foreach($pizzas as $key => $value){
            Pizza::create($value);
        }
    }
}
