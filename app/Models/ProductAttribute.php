<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\AttributeValue;
use App\Models\Attribute;

class ProductAttribute extends Model
{
    use HasFactory;


    protected $guarded = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

 //    /**
	//  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	//  */
	// public function attributesValues()
	// {
	//     return $this->belongsToMany(AttributeValue::class);
	// }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
