<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductcategoryController extends Controller
{
    public function index()
    {
        $categories = Productcategory::get();
        return view('admin.category.index', compact('categories'));
    }
    public function store(Request $request)
    {
        if ($request->image != null) {

            $save_path = public_path('images/category');

            if (!file_exists($save_path)) {

                mkdir($save_path, 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();

            $value = $request->image->move(public_path('images/category'), $imageName);
        } else {

            $imageName = null;
        }
        $formdata = [

            'title' => $request->title,
            'slug' => Str::slug($request->title),

            'image' => $imageName,

            'description' => $request->description,

        ];

        Productcategory::create($formdata);
        Session::flash('message', 'Category added successfully.');
        return redirect()->route('admin.category');
    }


    function Delete($id)
    {
        $schooldata = Productcategory::find($id);

        $schooldata->delete();
        Session::flash('message', 'Category deleted successfully');
        return redirect()->route('admin.category');
    }

    public function Edit(Request $request)
    {

        $data = Productcategory::find($request->id);
        echo $data;
    }


    public function Update(Request $request)
    {

        $update = Productcategory::find($request->category_id);
        $update->slug = Str::slug($request->title);
        $update->title = $request->title;
        $update->description = $request->description;

        $update->save();

        if ($request->image != null) {

            $save_path = public_path('images/catetory');

            if (!file_exists($save_path)) {
                mkdir($save_path, 0777, true);
            }

            $getimagename = $update->image;

            $imageName = time() . '.' . $request->image->extension();

            $value = $request->image->move(public_path('images/category'), $imageName);


            $updateimage = Productcategory::where('id', $request->category_id)->update(['image' => $imageName]);

            if ($getimagename != null) {

                $image_path = public_path() . '/images/category/' . $getimagename;

                //dd($image_path);
                if (file_exists($image_path)) {


                    unlink($image_path);
                }
            }
        }


        Session::flash('message', 'Category Updated Successfully.');
        return redirect()->route('admin.category');
    }
}