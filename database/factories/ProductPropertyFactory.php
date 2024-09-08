<?php

namespace Database\Factories;

use App\Models\ProductProperty;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductProperty>
 */
class ProductPropertyFactory extends Factory
{
    protected $model = ProductProperty::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            'color' => ['red','green','blue'],
            'size'=>['S','M','L'],
            'country'=>['Spain','France','Germany'],
            'style'=>['Fit','Jogged','Classic'],
            'type'=>['Test','Dev','Prod']
        ];
        $name = $this->faker->randomElement(array_keys($data));
        $value = $this->faker->randomElement(array_values($data[$name]));



        return [
            'name'=>$name,
            'value'=>$value,
            'product_id'=>random_int(1,100)
        ];
    }
}
