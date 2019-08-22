<?php

namespace App\Model;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

	protected $fillable = ['customer','review','star'];
	protected $guarded = ['id','product_id','created_at','update_at'];
	protected $table = 'reviews';
    
    public function product ()
    {
    	return $this->belongsTo(Product::class);
    }
}
