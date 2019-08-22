<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name','detail','price','stock','discount'];
	protected $guarded = ['id','user_id','created_at','update_at'];
	protected $table = 'products';
    
    public function reviews () 
    {
    	return $this->hasMany(Review::class);
    }
}
