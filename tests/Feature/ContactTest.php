<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
   use RefreshDatabase;

   /** @test */
   public function can_send_contact_query()
   {    
        $this->withoutExceptionHandling();
        $params = [
        
            'name' => 'Sharmin Tanu',
            'email' => 'tanu@gmail.com',
            'subject' => 'Shipping charge',
            'message' => 'cost per kg'
        ]; 

        $this->post(route('contact'),$params);


        $this->assertDatabaseHas('contacts',$params);
   }
}
