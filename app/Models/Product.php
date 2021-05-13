<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Traits\CoverImageTrait;
use App\Traits\ThumbsImageTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\ProductAttribute;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Tag;
use Gloudemans\Shoppingcart\CanBeBought;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use LamaLama\Wishlist\Wishlistable;

class Product extends Model implements HasMedia,Buyable 
{
    use HasFactory, 
    	HasSlug,
    	InteractsWithMedia,
    	CoverImageTrait,
    	ThumbsImageTrait,
        CanBeBought,
        Wishlistable;


    protected $guarded = [];


    /**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function attributes()
	{
	    return $this->hasMany(ProductAttribute::class,'product_id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function categories()
	{
	    return $this->belongsToMany(Category::class);
	}


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);

    }

    public function getBreadcrumb()
    {
       
        $html = "";
        $this->categories->each(function($cat) use (&$html){
            if($cat->menu)
            {
                $html .= "<a href=\"{$cat->path()}\" class=\"font-hk text-white text-base hover:text-primary transition-colors\" >{$cat->name}</a>";
                $html .= "<span class='font-hk text-white text-base px-2'>.</span>";
    
            }
            
        });

        $html .= "<span class='font-hk text-white text-base '> {$this->name} </span>";

        return $html;
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


    public function getPercentDiscountAttribute()
    {
        return  ceil((($this->price - $this->special_price)*100) /$this->price) ;
    }

    public function getThumbPath()
    {
        return $this->getMedia()->first()->getFullUrl();
    }

    public function path()
    {
        return '/product/'.$this->slug;
    }
}
