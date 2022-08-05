<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{

    function index()
    {
        $services = Service::get();
        return view('admin.homepage.services', compact('services'));
    }
    function Postaservice(Request $request)
    {

        if ($request->smallimage != null) {

            $save_path = public_path('images/service');

            if (!file_exists($save_path)) {

                mkdir($save_path, 0777, true);
            }

            $imageName = time() . '.' . $request->smallimage->extension();

            $value = $request->smallimage->move(public_path('images/service'), $imageName);
        } else {

            $imageName = null;
        }
        if ($request->largeimage != null) {

            $save_path = public_path('images/service');

            if (!file_exists($save_path)) {

                mkdir($save_path, 0777, true);
            }

            $imageNamel = time() . '.' . $request->largeimage->extension();

            $value = $request->largeimage->move(public_path('images/service'), $imageNamel);
        } else {

            $imageNamel = null;
        }

        $formdata = [

            'title' => $request->title,
            'slug' => Str::slug($request->title),

            'smallimage' => $imageName,
            'largeimage' => $imageNamel,
            'description' => $request->description,

        ];

        Service::create($formdata);
        Session::flash('message', 'Service added successfully.');
        return redirect()->route('admin.service');
    }


    public function serviceedit(Request $request)
    {

        $schooldata = Service::find($request->id);
        echo $schooldata;
    }

    public function delete($id)
    {

        $schooldata = Service::find($id);

        $schooldata->delete();
        Session::flash('message', 'Service deleted successfully');
        return redirect()->route('admin.services');
    }
    public function serviceupdate(Request $request)
    {

        $update = Service::find($request->service_id);
        $update->slug = Str::slug($request->title);
        $update->title = $request->title;
        $update->description = $request->description;

        $update->save();

        if ($request->smallimage != null) {

            $save_path = public_path('images/service');

            if (!file_exists($save_path)) {
                mkdir($save_path, 0777, true);
            }

            $getimagename = $update->smallimage;

            $imageName1 = time() . '.' . $request->smallimage->extension();

            $value = $request->smallimage->move(public_path('images/service'), $imageName1);


            $updateimage = Service::where('id', $request->service_id)->update(['smallimage' => $imageName1]);

            if ($getimagename != null) {

                $image_path = public_path() . '/images/service/' . $getimagename;

                //dd($image_path);
                if (file_exists($image_path)) {


                    unlink($image_path);
                }
            }
        }
        if ($request->largeimage != null) {

            $save_path = public_path('images/service');

            if (!file_exists($save_path)) {
                mkdir($save_path, 0777, true);
            }

            $getimagename1 = $update->largeimage;

            $imageName = time() . '.' . $request->largeimage->extension();

            $value = $request->largeimage->move(public_path('images/service'), $imageName);


            $updateimage = Service::where('id', $request->service_id)->update(['largeimage' => $imageName]);

            if ($getimagename1 != null) {

                $image_path = public_path() . '/images/service/' . $getimagename1;

                //dd($image_path);
                if (file_exists($image_path)) {


                    unlink($image_path);
                }
            }
        }

        Session::flash('message', 'Service Updated Successfully.');
        return redirect()->route('admin.services');
    }
}