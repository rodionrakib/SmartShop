<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;





class AttributeValue extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    /**
     * @var array
     */
    protected $casts = [
        'attribute_id'  =>  'integer',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
	}
}
