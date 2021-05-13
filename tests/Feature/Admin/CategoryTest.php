<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Employee;


class CategoryTest extends TestCase
{

    use RefreshDatabase,WithFaker;



    /** @test */
    public function it_can_show_the_create_category_page()
    {


        $this
            ->actingAsEmployee()
            ->get(route('admin.categories.create'))
            ->assertStatus(200)
            ->assertSee('Create Category');
    }


   /** @test */
    public function it_can_create_category()
    {
        $this->withoutExceptionHandling();

        $cover = UploadedFile::fake()->image('file.png', 600, 600);
        $parent = Category::factory()->create(); // as root 

        $params = [
            'name' => 'Boys',
            'cover' => $cover,
            'status' => 1,
            'parent' => $parent->id,
            'featured' => 1
        ];

        $this
            ->actingAsEmployee()
            ->post(route('admin.categories.store'), $params)
            ->assertStatus(302)
            ->assertRedirect(route('admin.categories.index'))
            ->assertSessionHas('message', 'Category created');

        $data = collect($params)->except('cover','parent')->toArray();
        $this->assertDatabaseHas('categories',$data);
        $created = Category::whereSlug('boys')->first();
        $this->assertCount(1,$created->getMedia('cover'));
        $this->assertTrue($parent->children->contains($created));

    }


    /** @test */
    public function can_not_create_category_with_non_existing_parent()
    {
        $cover = UploadedFile::fake()->image('file.png', 600, 600);

        $params = [
            'name' => 'Boys',
            'cover' => $cover,
            'status' => 1,
            'parent' => 999
        ];

        $response = $this
            ->actingAsEmployee()
            ->post(route('admin.categories.store'), $params);

        $response->assertSessionHasErrors('parent');

    }

        /** @test */
    public function it_can_update_the_category()
    {
        $data = [
            'name' => $this->faker->name,
            'status' => 0
        ];

        $category = Category::factory()->create();

        $this
            ->actingAsEmployee()
            ->put(route('admin.categories.update', $category->id), $data)
            ->assertStatus(302)
            ->assertRedirect(route('admin.categories.index'))
            ->assertSessionHas('message', 'Category updated');
    }


        /** @test */
    public function it_can_remove_a_category()
    {
        $category = Category::factory()->create();

        $this
            ->actingAsEmployee()
            ->delete(route('admin.categories.destroy', $category->id))
            ->assertStatus(302)
            ->assertRedirect(route('admin.categories.index'))
            ->assertSessionHas('message', 'Delete successful');
    }


}
