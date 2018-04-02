<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= ['artist_id','price', 'description', 'tracklist', 'release_date', 'product_image', 'product_name'];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = 'products';

    public function artists(){
    	return $this->hasMany('App\Artist', 'id');
    }
}
