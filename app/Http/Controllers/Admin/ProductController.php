<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Productcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Productimages;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('Categoryproduct')->get();

        $categories = Productcategory::get();
        return view('admin.product.index', compact('products', 'categories'));
    }

    public function Store(Request $request)
    {


        $request->validate(['title' => 'required|unique:products',]);

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:products'
        // ]);

        // if ($validator->fails()) {
        //     Session::flash('add-model', 'Productnot');
        //     Session::flash('error', 'Product title already taken !');
        //     return redirect()->back();
        // }

        if ($request->image != null) {

            $save_path = public_path('images/product');

            if (!file_exists($save_path)) {

                mkdir($save_path, 0777, true);
            }

            $imageName = time() . '.' . $request->image->extension();

            $value = $request->image->move(public_path('images/product'), $imageName);
        } else {

            $imageName = null;
        }
        $formdata = [

            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,
            'image' => $imageName,
            'description' => $request->description,
            'shortdescription' => $request->shortdescription,

        ];
        Product::create($formdata);
        Session::flash('message', 'Product added successfully.');
        return redirect()->route('admin.product');
    }

    public function ckeditorupload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName = pathinfo($originName, PATHINFO_FILENAME);

            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName . '_' . time() . '.' . $extension;



            $request->file('upload')->move(public_path('images/product'), $fileName);



            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('public/images/product/' . $fileName);

            $msg = 'Image uploaded successfully';

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";



            @header('Content-type: text/html; charset=utf-8');

            echo $response;
        }
    }

    public function Delete($id)
    {

        Product::find($id)->delete();
        Session::flash('message', 'Product deleted successfully');
        return redirect()->route('admin.product');
    }

    public function Edit(Request $request)
    {

        $data = Product::with('Categoryproduct')->find($request->id);
        echo $data;
    }

    public function update(Request $request)
    {

        // $validator = Validator::make($request->all(), [

        //     ' title' => 'required|unique: products, title,' . $request->product_id,
        // ]);

        // if ($validator->fails()) {
        //     Session::flash('edit-model', 'Productnot');
        //     Session::flash('error', 'Product title already taken !');
        //     return redirect()->back();
        // }

        $request->validate(['title' => 'required|unique:products,title,' . $request->product_id]);
        $update = Product::find($request->product_id);
        $update->category_id = $request->category_id;
        $update->slug = Str::slug($request->title);
        $update->title = $request->title;
        $update->description = $request->description;
        $update->shortdescription = $request->shortdescription;
        $update->save();

        if ($request->image != null) {

            $save_path = public_path('images/product');

            if (!file_exists($save_path)) {
                mkdir($save_path, 0777, true);
            }

            $getimagename = $update->image;

            $imageName = time() . '.' . $request->image->extension();

            $value = $request->image->move(public_path('images/product'), $imageName);


            $updateimage = Product::where('id', $request->product_id)->update(['image' => $imageName]);

            if ($getimagename != null) {

                $image_path = public_path() . '/images/product/' . $getimagename;

                //dd($image_path);
                if (file_exists($image_path)) {


                    unlink($image_path);
                }
            }
        }


        Session::flash('message', 'Product Updated Successfully.');
        return redirect()->route('admin.product');
    }

    public function view($id)
    {
        $product = Product::with(['Categoryproduct', 'Productimages'])->find($id);
        return view('admin.product.view', compact('product'));
    }


    public function uploadImage(Request $request)
    {


        //$images = array();
        if ($files = $request->file('file')) {
            $save_path = public_path('images/product');

            if (!file_exists($save_path)) {

                mkdir($save_path, 0777, true);
            }
            foreach ($files as $file) {
                $image_names = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $imageName = $image_names . '.' . $ext;

                $value = $file->move(public_path('images/product'), $imageName);

                $data = ['url' => $imageName, 'product_id' => $request->product_id];
                Productimages::create($data);
            }
            Session::flash('message', 'Gallery inserted Successfully.');
            return redirect()->back();
        }
    }

    function DeleteImage($id)
    {
        $images = Productimages::find($id);
        $getimagename = $images->url;
        if ($getimagename != null) {

            $image_path = public_path() . '/images/product/' . $getimagename;

            //dd($image_path);
            if (file_exists($image_path)) {


                unlink($image_path);
            }
        }
        $images->delete();
        Session::flash('message', 'Product Image  deleted successfully');
        return redirect()->back();
    }
}