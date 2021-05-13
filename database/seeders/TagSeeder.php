<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [ 'Hot' , 'Treandy', 'New Arrival', 'Summer Collection' ];

        foreach ($tags as $tag) 
        {
        	Tag::factory()->create([

        		'name' => $tag
        	]);
        }
    }
}
