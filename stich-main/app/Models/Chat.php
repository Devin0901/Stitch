<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $primaryKey = 'id';
    protected $table ='chats';
    protected $fillable=[
        'user_id',
        'tailor_id',
        'detail',
        'created_at'
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
