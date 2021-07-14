<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Traits\CoverImageTrait;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Product;

class Category extends Model implements HasMedia
{
    use HasFactory,
    	HasSlug,
    	NodeTrait,
    	InteractsWithMedia,
    	CoverImageTrait;

    protected $guarded = [];

    protected $casts = [
        'parent_id' =>  'integer',
        'featured'  =>  'boolean',
        'menu'      =>  'boolean'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function scopeVisible($query)
    {
        return $query->where('status',1);
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



    public function getBreadcrumb()
    {
        $html = "";
        $this->ancestors->each(function($node) use (&$html){
            $html .= "<a href=\"{$node->path()}\" class=\"font-hk text-white text-base hover:text-primary transition-colors\" >{$node->name}</a>";
            $html .= "<span class='font-hk text-white text-base px-2'>.</span>";
        });
        $html .= "<a href=\"{$this->path()}\" class=\"font-hk text-white text-base hover:text-primary transition-colors\" >{$this->name}</a>";
        return $html;
    }


    public function nestedPath()
    {

        $path = "/collections/";
        $this->ancestors->each(function($node) use (&$path){
            $path .= $node->slug."/";
        });
        return $path.$this->slug;
    }

        public function path()
    {

        return "/collections/".$this->slug;
       
    }



}
