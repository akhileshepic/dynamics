<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Homepageabout;
use App\Models\Servicelimit;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class HomepageController extends Controller
{
    public function homepagesetup()
    {
        $aboutus = Homepageabout::first();
        $servicecount = Servicelimit::first();

        return view('admin.homepage.index', compact('aboutus', 'servicecount'));
    }
    public function slider()
    {
        $sliders = Slider::get();
        return view('admin.homepage.slider', compact('sliders'));
    }

    public function sliderpost(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required',

        ]);


        if ($request->image != null) {

            $save_path = public_path('images/slider');

            if (!file_exists($save_path)) {

                mkdir($save_path, 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();

            $value = $request->image->move(public_path('images/slider'), $imageName);
        } else {

            $imageName = null;
        }

        $formdata = [


            'image' => $imageName,
            'head' => trim($request->head),
            'sub_head' => trim($request->sub_head),
            'description' => trim($request->description),


        ];

        Slider::create($formdata);
        Session::flash('message', 'Slider added successfully.');
        return redirect()->route('admin.slider');
    }

    public function  Postabouts(Request $request)
    {

        if ($request->about_id) {
            $update = Homepageabout::find($request->about_id);

            $update->heading = trim($request->heading);
            $update->sub_heading = trim($request->sub_heading);
            $update->description = trim($request->description);

            $update->save();

            if ($request->image != null) {

                $save_path = public_path('images/about');

                if (!file_exists($save_path)) {
                    mkdir($save_path, 0777, true);
                }

                $getimagename = $update->image;

                $imageName = time() . '.' . $request->image->extension();

                $value = $request->image->move(public_path('images/about'), $imageName);


                $updateimage = Homepageabout::where('id', $request->about_id)->update(['image' => $imageName]);

                if ($getimagename != null) {

                    $image_path = public_path() . '/images/about/' . $getimagename;

                    //dd($image_path);
                    if (file_exists($image_path)) {


                        unlink($image_path);
                    }
                }
            }
        } else {
            $validatedData = $request->validate([
                'image' => 'required', 'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
            ]);


            if ($request->image != null) {

                $save_path = public_path('images/about');

                if (!file_exists($save_path)) {

                    mkdir($save_path, 0777, true);
                }

                $imageName = time() . '.' . $request->image->extension();

                $value = $request->image->move(public_path('images/about'), $imageName);
            } else {

                $imageName = null;
            }

            $formdata = [


                'image' => $imageName,
                'heading' => $request->heading,
                'sub_heading' => $request->sub_heading,
                'description' => $request->description,


            ];

            Homepageabout::create($formdata);
            Session::flash('message', 'Aboutus update successfully.');
        }

        return redirect()->route('admin.homepage');
    }

    public function destroy($id)
    {

        $schooldata = Slider::find($id);

        $schooldata->delete();
        Session::flash('message', 'Slider deleted successfully');
        return redirect()->route('admin.slider');
    }


    public function ServiceLimit(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'noofservice' => 'integer|required|min:1'
        ]);
        $newUser = Servicelimit::updateOrInsert([
            'id' => $request->service_id
        ], [

            'heading'     => trim($request->get('heading')),
            'noofservice'     => trim($request->get('noofservice')),
        ]);
        Session::flash('message', 'Service Updated successfully');
        return redirect()->route('admin.homepage');
    }


    // public function serviceedit(Request $request)
    // {

    //     $schooldata = Homeservice::find($request->id);
    //     echo $schooldata;
    // }





}