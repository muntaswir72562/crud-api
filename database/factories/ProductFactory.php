<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pName = $this->faker->randomElement(["Product A", "Product B", "Product C", "Product D", "Product E"]);
        $category=$this->faker->randomElement(["Electronics", "Clothing", "Accessories", "Home & Kitchen", "Beauty", "Sports & Outdoors", "Books", "Toys & Games", "Automotive"]);
        return [
            'pName'=>$pName,
            'category'=>$category,
            'supplier'=>$this->faker->company(),
            'unit_price'=>$this->faker->numberBetween(50,100),
            'stock'=>$this->faker->numberBetween(0,1000)
        ];
    }
}
