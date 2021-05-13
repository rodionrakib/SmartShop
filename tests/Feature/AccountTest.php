<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;


class AccountTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function can_store_item_in_wishlist()
    {
        $this->actingAs($customer = User::factory()->create());

        $product = Product::factory()->create();

        $customer->wish($product);

        $this->assertCount(1,$customer->wishlists());
        
    }


    /** @test */
    public function customer_can_update_there_account_info()
    {
    	$customer = User::factory()->create();

    	$this->actingAs($customer);


    	$this->patch(route('account-details'),[

    		'name' => 'Rodion Rakib',
    		'email' => 'foo@bar',
    		'phone_number' => '017854455543',
    		'address' => 'texas,new maxico-1230, Nw'
    	]);


    	$customer = $customer->fresh();


    	$this->assertEquals('Rodion Rakib',$customer->name);
    	$this->assertEquals('foo@bar',$customer->email);
    	$this->assertEquals('017854455543',$customer->phone_number);
    	$this->assertEquals('texas,new maxico-1230, Nw',$customer->address);

    }
}
