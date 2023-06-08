<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Create categories and retrieve their IDs
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();
        $category3 = Category::factory()->create();
        $category4 = Category::factory()->create();
        $category5 = Category::factory()->create();
        $category6 = Category::factory()->create();
        $category7 = Category::factory()->create();
        $category8 = Category::factory()->create();
        $category9 = Category::factory()->create();
        $category10 = Category::factory()->create();

        // Associate products with category IDs
        $product1 = Product::factory()->create(['category_id' => $category1->id]);
        $product2 = Product::factory()->create(['category_id' => $category2->id]);
        $product3 = Product::factory()->create(['category_id' => $category3->id]);
        $product3 = Product::factory()->create(['category_id' => $category4->id]);
        $product3 = Product::factory()->create(['category_id' => $category5->id]);
        $product3 = Product::factory()->create(['category_id' => $category6->id]);
        $product3 = Product::factory()->create(['category_id' => $category7->id]);
        $product3 = Product::factory()->create(['category_id' => $category8->id]);
        $product3 = Product::factory()->create(['category_id' => $category9->id]);
        $product3 = Product::factory()->create(['category_id' => $category10->id]);
    }
}
