<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\User;

class RateingTest extends TestCase
{
    use RefreshDatabase;



    /** @test */
    public function product_can_be_rated()
    {
        $this->actingAs($customer = User::factory()->create());
        // We have authorized user and product

        $product = Product::factory()->create();

        $product->rate(4, 'Koli','I like the watch');

        $this->assertCount(1,$product->ratings);


        // submits review for that product 

        // product should have the review 
           
    }

}
