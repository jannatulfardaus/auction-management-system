<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];


    public function Bid()
    {
        return $this->belongsTo(Bid::class,'bid_id','id');
    
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    
    }
}
