<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ProductTest extends TestCase
{
	use RefreshDatabase;

	/** @test */
	public function many_to_many_relation_bitween_category_product()
	{
		$product = Product::factory()->create();

		$categories = Category::factory()->count(2)->create();

        $categoryIds = $categories->transform(function (Category $category) {
            return $category->id;
        })->all();

        $product->categories()->attach($categoryIds);

        $product = $product->fresh();
        $this->assertCount(2,$product->categories);
	}
}
