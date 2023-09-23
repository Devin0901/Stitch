<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primaryKey  = 'user_id';
    protected $fillable=['email',
    'username'
    ,'password'
    ,'isTailor'
    ,'country'
    ,'city'
    ,'postal_code'
    ,'address'
    ,'gender'
    ,'experience',
    'fix_cloth',
    'phone_number',
    'custom_cloth',
    'lastname',
    'firstname',
    'isaplicant'];
    // public function getproduct(){
    //     return $this->hasMany('App\Models\product');s
    // }

    function getproduct(){
        return $this->hasMany(product::class);
    }
    function tailor(){
        return $this->hasOne(Tailor::class,'user_id');
    }
    public function address(){
        return $this->hasOne(Address::class,'user_id');
    }
    public function chats()
    {
        return $this->hasMany(Chat::class,'user_id');
    }
}
