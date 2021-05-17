<?php 
namespace App\Traits; 	

use App\Models\Rating;
    
trait Rateable 
{
	public function rate($rating,$name,$message,$user = null)
	{
		if($rating > 5 || $rating < 1)
		{
		      throw new \InvalidArgumentException("Error Processing Request");
		      
		}
	  	return $this
	      ->ratings()
	      ->updateOrCreate([
	          'user_id' => $user ? $user->id:auth()->id(),
	          
	      ],compact('rating','name','message'));	
	}
	public function ratings()
	{
	  return $this->morphMany(Rating::class,'rateable');
	}
	 
	public function rating()
	{
	  return $this->ratings->avg('rating');
	}	
    
}
    