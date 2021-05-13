<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Attribute;



class AttributeTest extends TestCase
{
    use RefreshDatabase,WithFaker;


    /** @test */
    public function it_should_show_the_create_attribute_page()
    {
        $this->withoutExceptionHandling();
        $this
            ->actingAsEmployee()
            ->get(route('admin.attributes.create'))
            ->assertStatus(200)
            ->assertSee('Create Attribute');
    }



        /** @test */
    public function it_should_be_able_to_create_an_attribute()
    {
        $this->withoutExceptionHandling();


        $name = $this->faker->word;
        $data = [
            'name' => $name,
            'code' => strtolower($name),
            'frontend_type' => 'select',
            'is_filterable' => 1,
            'is_required' => 1
        ];

        $this
            ->actingAsEmployee()
            ->post(route('admin.attributes.store'), $data)
            ->assertStatus(302)
            ->assertRedirect(route('admin.attributes.index'));

        $this->assertDatabaseHas('attributes',$data);
    }


        /** @test */
    public function it_should_show_the_list_of_attributes_page()
    {

        $this
            ->actingAsEmployee()
            ->get(route('admin.attributes.index'))
            ->assertStatus(200)
            ->assertSee('Attribute List');
    }




    /** @test */
    public function it_can_delete_the_attribute()
    {
        $this->withoutExceptionHandling();
        $attribute = Attribute::factory()->create();

        $this
            ->actingAsEmployee()
            ->delete(route('admin.attributes.destroy', $attribute->id))
            ->assertStatus(302)
            ->assertRedirect(route('admin.attributes.index'))
            ->assertSessionHas('message', 'Attribute deleted successfully!');
    }



    
    /** @test */
    public function it_errors_updating_the_attribute()
    {


        $attribute = Attribute::factory()->create();
        $data = ['name' => null];

        $this
            ->actingAsEmployee()
            ->put(route('admin.attributes.update', $attribute->id), $data)
            ->assertSessionHasErrors('name');

    
    }

    /** @test */
    public function it_should_be_able_to_update_the_attribute()
    {
        $this->withoutExceptionHandling();
        $attribute = Attribute::factory()->create();

        $name = $this->faker->word;
        $data = [
            'name' => $name,
            'code' => strtolower($name),
            'frontend_type' => 'select',
            'is_filterable' => 1,
            'is_required' => 1
        ];

        $this
            ->actingAsEmployee()
            ->put(route('admin.attributes.update', $attribute->id), $data)
            ->assertStatus(302)
            ->assertSessionHas('message', 'Attribute update successful!');

        $this->assertDatabaseHas('attributes',$data);

    }

    /** @test */
    public function it_should_show_the_update_attribute_page()
    {
        $attribute = Attribute::factory()->create();
        $this
            ->actingAsEmployee()
            ->get(route('admin.attributes.edit', $attribute->id))
            ->assertStatus(200);

    }

}
