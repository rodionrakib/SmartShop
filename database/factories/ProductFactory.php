<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;


class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'sku' => $this->faker->word,
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'short_description' => $this->faker->word,
            'quantity' => 50,
            'weight' => .50,
            'price' => 150.50,
            'special_price' => 120,
            'status' => 1,
            'featured' => 1,
            'brand_id' => Brand::factory()->create()->id,
        ];
    }
}
