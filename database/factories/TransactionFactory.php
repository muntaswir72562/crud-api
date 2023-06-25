<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $transaction=$this->faker->randomElement(['purchase', 'sale','return']);
        return [
        
            'product_id'=>Product::factory(),
            'transaction_type'=> $transaction,
            'transaction_date'=> $this->faker->dateTimeThisDecade(),
            'quantity'=> $this->faker->numberBetween(1, 1000),
            'unit_price'=>$this->faker->numberBetween(10, 1000)
        ];
    }
}
