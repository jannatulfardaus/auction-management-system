<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function catagory()
    {
        return $this->belongsTo(Catagories::class,'Category_id','id');
    
    }

 public function seller()
    {
        return $this->belongsTo(User::class,'user_id','id');
    
    }


    public function bidders(){

        return $this->hasMany(Bid::class,'product_id','id');
    }
}
