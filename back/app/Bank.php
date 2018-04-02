<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable= ['bank_name'];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = 'banks';
}
