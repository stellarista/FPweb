<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable= ['account_name','email','address','password','phone','birth_date','province','city','postal_code'];
    public $timestamps = false;
    protected $primaryKey = "id";
    protected $table = 'users';

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
