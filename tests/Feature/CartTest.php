<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Gloudemans\Shoppingcart\Facades\Cart;
use Tests\TestCase;
use App\Models\Product;
    
class CartTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function it_can_add_product_to_cart()
    {
        $this->withoutExceptionHandling();
        $product = Product::factory()->create();

        $this->assertCount(0,Cart::content());
        $data = [
            'id' => $product->id,
            'quantity' => 3,
            'size' => 'small',
            'color' => 'red',
            'action' => 'add_to_cart'
        ];

        $this
            ->post(route('cart.store', $data))
            ->assertStatus(302)
            ->assertSessionHas('message', 'Add to cart successful')
            ->assertRedirect(route('cart.index'));

         $this->assertEquals(1,Cart::content()->count());

    }


    /** @test */
    public function it_can_remove_the_item_in_the_cart()
    {

        $product = Product::factory()->create();

        $cartItem = Cart::add($product,2);


            $this
                ->delete(route('cart.destroy', $cartItem->rowId))
                ->assertStatus(302)
                ->assertRedirect(route('cart.index'))
                ->assertSessionHas('message', 'Removed to cart successful');
        
    }


    /** @test */
    public function it_can_show_the_cart_page()
    {

        $this
            ->get(route('cart.index'))
            ->assertStatus(200)
            ->assertSee('Cart is empty !');
    }


    

    // /** @test */
    // public function it_can_update_the_cart()
    // {
    //     $this->withoutExceptionHandling();
        
    //     $product = Product::factory()->create();
    //     $cartItem = Cart::add($product,2);
        
    //     $this
    //         ->patch(route('cart.update', $cartItem->rowId), ['quantity' => 1])
    //         ->assertStatus(302)
    //         ->assertRedirect(route('cart.index'))
    //         ->assertSessionHas('message', 'Update cart successful');

    // }


}
