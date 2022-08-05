<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Homepageabout;
use App\Models\Service;
use App\Models\Servicelimit;

class FrontendController extends Controller
{
     public function index()
     {
          $sliders = Slider::get();
          $about = Homepageabout::first();
          $servicelimit = Servicelimit::first();
          if (!empty($servicelimit)) {
               $services = Service::limit($servicelimit->noofservice)->get();
          } else {
               $services = Service::take(6)->get();
          }


          return view('frontend.home', compact('sliders', 'about', 'services', 'servicelimit'));
     }

     function About()
     {
          $about = Homepageabout::first();

          return view('frontend.about', compact('about'));
     }
     function Service()
     {
          $services = Service::get();
          return view('frontend.services', compact('services'));
     }
}