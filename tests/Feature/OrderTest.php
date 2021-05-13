<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{

    use RefreshDatabase;



    /** @test */

    public function guest_can_order_product()
    {
        

        $this->withoutExceptionHandling();

        $data = [

            'phone_number' => '01539542041',
            'full_name' => 'Rakib',
            'address' => 'Valid Address'
        ];


        $this->post('/orders',$data);

        
        $this->assertDatabaseHas('orders',$data);
    }

        /** @test */

    public function phone_number_required()
    {
        


        $data = [

            'phone_number' => '',
            'full_name' => 'Rakib',
            'address' => 'Valid Address'
        ];


        $this->post('/orders',$data)->assertSessionHasErrors('phone_number');

        
    }

}
