<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'tb_product';
    protected $primaryKey  = 'product_id';
    protected $fillable=['user_id','product_name','productprice'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transactions::class,'product_id');
    }
}
