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
    	$mens = Category::factory()->create(['name' => 'Men','featured' => true,'slug' => 'men']);

        Category::factory()->count(3)->create()->each(function($child) use ($mens){
            $child->appendToNode($mens)->save();
        });


        $women = Category::factory()->create(['name' => 'Women','featured' => true,'slug' => 'women']);


        Category::factory()->count(4)->create()->each(function($child) use ($women){
            $child->appendToNode($women)->save();
        });

        $studentAccesories = Category::factory()->create(['name' => 'Students','slug' => 'students']);

        Category::factory()->count(2)->create()->each(function($child) use ($studentAccesories){
            $child->appendToNode($studentAccesories)->save();
        });

        $electronics = Category::factory()->create(['name' => 'Electronics','slug'=> 'electronics']);

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

			$ids = Category::all()->random(4)->pluck('id')->toArray();

			$product->categories()->attach($ids);

            $product->addMedia(storage_path().'/product.jpg')
            ->preservingOriginal()
            ->toMediaCollection();

		});


			
        
    }
}
