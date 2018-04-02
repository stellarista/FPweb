<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class check_out extends Model
{
    protected $fillable=['transaction_date', 'account_id', 'product_id', 'bank_id', 'receipt_img', 'payment_status', 'amount'];
    public $timestamps = false;
    protected $primarykey='id';
    protected $table="checkouts";

    // public function accounts(){
    //    return $this->hasMany('App\User', 'id');
    // }

    // public function products(){
    //     return $this->hasMany('App\Product', 'id');
    // }

    // public class banks(){
    //     return $this->hasMany('App\Bank', 'id');
    // }
}
