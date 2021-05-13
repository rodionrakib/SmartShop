<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Attribute;



class AttributeValueTest extends TestCase
{
    use RefreshDatabase;



    // /** @test */
    // public function it_can_remove_the_attribute_value()
    // {
    //     $attribute = Attribute::factory()->create();

    //     $this
    //         ->actingAsEmployee()
    //         ->post(route('admin.attributes.values.store', $attribute->id), ['value' => 'test']);

    //     $this
    //         ->actingAsEmployee()
    //         ->delete(route('admin.attributes.values.destroy', [$attribute->id, 1]))
    //         ->assertStatus(302)
    //         ->assertSessionHas('message', 'Attribute value removed!');
    // }

    // /** @test */
    // public function it_can_store_the_attribute_values()
    // {
    //     $this->withoutExceptionHandling();
    //     $attribute = Attribute::factory()->create();

    //     $this
    //         ->actingAsEmployee()
    //         ->post(route('admin.attributes.values.store', $attribute->id), ['value' => 'test'])
    //         ->assertStatus(302)
    //         ->assertRedirect(route('admin.attributes.show', $attribute->id))
    //         ->assertSessionHas('message', 'Attribute value created');

    //     $this->assertCount(1,$attribute->values);
    // }



    
    // /** @test */
    // public function it_can_sow_the_create_the_attribute_value_page()
    // {
    //     $attribute = factory(Attribute::class)->create();

    //     $this
    //         ->actingAs($this->employee, 'employee')
    //         ->get(route('admin.attributes.values.create', $attribute->id))
    //         ->assertStatus(200)
    //         ->assertSee('Attribute value')
    //         ->assertSee($attribute->name);
    // }
}
