<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        // Get random category ID from the existing categories
        $categoryIds = Category::pluck('id')->toArray();
        $categoryId = $this->faker->randomElement($categoryIds);

        return [
            'name' => $this->faker->sentence(3), 
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category_id' => $categoryId,
            'cover_image' => 'single-game.jpg',
        ];
    }
}
