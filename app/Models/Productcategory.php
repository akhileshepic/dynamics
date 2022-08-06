<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    function Product()
    {
        return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }
}