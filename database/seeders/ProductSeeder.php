<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$mensFashion = Category::factory()->create(['name' => 'Men\'s Fashion ']);

        $womensFashion = Category::factory()->create(['name' => 'Women\'s Fashion ']);

        $studentAccesories = Category::factory()->create(['name' => 'Student\'s Accesories']);

        $onSaleToday = Category::factory()->create(['name' => 'On Sale Only Today','slug' => 'on-sale-only-today','menu' => false]);

        $newArrivals = Category::factory()->create(['name' => 'New Arrivals','slug' => 'new-arrivals', 'menu' => false]);
    	

        // add  category image

        $cats = Category::all();

        $cats->each(function($cat){
            $cat->addMedia(storage_path().'/brand-03.png')
            ->preservingOriginal()
            ->toMediaCollection('cover');
        });

		$products = Product::factory()->count(20)->create();

		$products->each(function($product){

			$ids = Category::all()->random(2)->pluck('id')->toArray();

			$product->categories()->attach($ids);

            $product->addMedia(storage_path().'/product.jpg')
            ->preservingOriginal()
            ->toMediaCollection();

		});


			
        
    }
}
