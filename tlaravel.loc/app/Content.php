<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = "product";
    protected $fillable = ['name','product_code','composition','price','img'];
}
