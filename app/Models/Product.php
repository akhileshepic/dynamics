<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    function Categoryproduct()
    {
        return $this->belongsTo('App\Models\Productcategory', 'category_id', 'id');
    }
}