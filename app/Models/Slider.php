<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Traits\CoverImageTrait;

class Slider extends Model implements HasMedia
{
    use HasFactory,
    	InteractsWithMedia,
    	CoverImageTrait;

    protected $guarded = [];
}
