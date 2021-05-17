<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $guarded = [];

    	public function user()
    	{
		return $this->belongsTo(User::class,'user_id'); 	
    	}
    	public function ratable()
    	{
    		return $this->morphsTo();
    	}

        public function stars()
        {
            switch ($this->rating) {
                case '1':
                    return "<i class=\"bx bxs-star text-primary\"></i>";
                    break;
                
                case '2':
                    return "<i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i>";

                case '3':
                    return "<i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i>";
                
                case '4':
                    return "<i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i>";

                case '5':
                    return "<i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i><i class=\"bx bxs-star text-primary\"></i>";

                default:
                    # code...
                    break;
            }
        }
}
