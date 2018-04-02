<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable= ['artist_name'];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = 'artists';
}
