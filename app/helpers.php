<?php

use App\Models\Contactaddress;
use App\Models\productcategory;
use App\Models\Product;

function getcontactdetails()
{
    $getstatename = Contactaddress::first();

    if ($getstatename) {
        return $getstatename;
    } else {
        return false;
    }
}

function Category()
{
    return productcategory::with('Product')->get();
}

function Product()
{
    return Product::get();
}