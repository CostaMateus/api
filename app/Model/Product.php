<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name','user_id','detail','price','stock','discount'];
	protected $guarded = ['id', 'created_at', 'update_at'];
	protected $table = 'products';
    
    public function reviews () 
    {
    	return $this->hasMany(Review::class);
    }
}
