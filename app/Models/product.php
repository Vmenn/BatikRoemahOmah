<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable=['title','slug','description','price','status','photo','color','stock','condition'];

    public function cat_info(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }
    public function carts(){
        return $this->hasMany(Cart::class)->whereNotNull('order_id');
    }
}
