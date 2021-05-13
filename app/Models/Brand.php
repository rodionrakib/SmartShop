<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Traits\CoverImageTrait;
use App\Models\Product;




class Brand extends Model implements HasMedia
{
    use HasFactory,HasSlug,InteractsWithMedia,CoverImageTrait;


    protected $guarded = [];




    public function products()
    {
        return $this->hasMany(Product::class);
    }


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


}
