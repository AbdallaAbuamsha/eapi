<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'details', 'price', 'stock', 'discount'
    ];
    //
    public function reviews()
    {
    	# code...
    	return $this->hasMany(Review::class);
    }
}
