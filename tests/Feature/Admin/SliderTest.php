<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;


class SliderTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function admin_can_create_slider()
    {
        $this->withoutExceptionHandling();

        $cover = UploadedFile::fake()->image('file.jpg', 1000, 600);

        $params = [
            'title' => 'Find Out New Mens Collection',
            'cover' => $cover,
            'status' => 1,
            'link' => 'http://smartstudentshop.com/categories/mens'
        ];

        $this
            ->actingAsEmployee()
            ->post(route('admin.sliders.store'), $params);

        $data = collect($params)->except('cover')->toArray();
        $this->assertDatabaseHas('sliders',$data);
    }
}