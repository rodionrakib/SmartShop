<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tag;


class ProductTest extends TestCase
{
    use RefreshDatabase;



    /** @test */
    public function can_create_product()
    {
        $this->withoutExceptionHandling();
        $this->actingAsEmployee();

        $brand = Brand::factory()->create();

        $tag = Tag::factory()->create();

        $categories = Category::factory()->count(2)->create();

        $categoryIds = $categories->transform(function (Category $category) {
            return $category->id;
        })->all();
        
        $params = [

            'sku' => '64831',
            'name' => 'Noise Canceling Headfone',
            'description' => 'It will remove all distruction while listening',
            'short_description' => 'this is a short description',
            'quantity' => 50,
            'weight' => .50,
            'price' => 150.50,
            'special_price' => 120,
            'status' => 1,
            'featured' => 1,
            'brand_id' => $brand->id,
            'categories' => $categoryIds,
            'tag_id' => $tag->id,

        ];


        $response = $this->post(route('admin.products.store'),$params);

        $collection = collect($params)->except('categories');
        $this->assertDatabaseHas('products',$collection->toArray());

        $brand = $brand->fresh();
        $product = Product::find(1);


        $this->assertCount(1,$brand->products);
        $this->assertCount(2,$product->categories);




    }
}
