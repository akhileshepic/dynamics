<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Homepageabout;
use App\Models\Service;
use App\Models\Servicelimit;
use App\Models\Product;
use App\Models\Productcategory;

class FrontendController extends Controller
{

     public function index()
     {
          $sliders = Slider::get();
          $about = Homepageabout::first();
          $servicelimit = Servicelimit::first();
          $product = Product::get();
          $productcategory = productcategory::with('Product')->get();
          // $productcategory = productcategory::select('productcategories.*', 'products.id as product_id', 'products.slug as productSlug', 'products.title as productTitle')
          //      ->join("products", "products.category_id", "=", "productcategories.id")
          //      ->get();

          if (!empty($servicelimit)) {
               $services = Service::limit($servicelimit->noofservice)->get();
          } else {
               $services = Service::take(6)->get();
          }


          return view('frontend.home', compact('sliders', 'about', 'services', 'servicelimit', 'product', 'productcategory'));
     }

     function About()
     {
          $about = Homepageabout::first();

          return view('frontend.about', compact('about'));
     }
     function Service()
     {
          $servicelimit = Servicelimit::first();

          $services = Service::get();
          return view('frontend.services', compact('services', 'servicelimit'));
     }

     function SingleProduct($slug)
     {
          $product = Product::where('slug', $slug)->first();
          return view('frontend.product', compact('product'));
     }
}