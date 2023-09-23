<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tailor extends Model
{
    use HasFactory;
    protected $table = 'tailors';
    protected $primaryKey = 'tailor_id';
    protected $fillable=[
        'user_id',
        'starting_price_tailors_id',
        'user_experience',
        'fix_cloth',
        'custom_cloth'
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function product():HasMany{
        return $this->hasMany(product::class,'product_id');
    }
    public function transaction():HasMany{
        return $this->hasMany(Transaction::class,'transaction_id');
    }
}
