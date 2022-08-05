<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', 'FrontendController@index')->name('home');

Route::get('/about', 'FrontendController@About')->name('about');

Route::get('/service', 'FrontendController@Service')->name('service');


Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');




Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('login', function () {

        return view('auth.login');
    });

    Route::get('/', function () {

        return redirect('admin/login');
    })->name('login');

    Route::middleware(['auth'])->group(function () {

        //Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::match(['get', 'post'], 'changepassword', 'DashboardController@changepassword')->name('changepassword');

        //Slider
        Route::get('/slider', 'HomepageController@slider')->name('slider');
        Route::get('slider/delete/{id}', 'HomepageController@destroy')->name('delete_slider');
        Route::post('/slider', 'HomepageController@sliderpost')->name('sliderpost');
        //EndSlider
        //Services Count Homepage
        Route::post('/servicelimit', 'HomepageController@ServiceLimit')->name('homesectioncount');
        Route::get('/homepage-section', 'HomepageController@homepagesetup')->name('homepage');
        Route::post('/homepage-section', 'HomepageController@Postabouts')->name('abouts');

        //Contact Setting
        Route::post('/contactsetting', 'HomepageController@contactSetting')->name('contactsetting');
        //Service
        Route::get('/service', 'ServiceController@index')->name('services');
        Route::post('/service', 'ServiceController@Postaservice')->name('service');
        Route::post('service/edit', 'ServiceController@serviceedit')->name('edit_service');
        Route::post('service/update', 'ServiceController@serviceupdate')->name('update_service');
        Route::get('service/delete/{id}', 'HomepageController@delete')->name('delete_service');


        //Category

        Route::get('/category', 'ProductcategoryController@index')->name('category');
        Route::post('/category', 'ProductcategoryController@store')->name('category');
        Route::get('/category/delete/{id}', 'ProductcategoryController@Delete')->name('delete_category');
        Route::post('/category/edit', 'ProductcategoryController@Edit')->name('edit_category');
        Route::post('/category/update', 'ProductcategoryController@update')->name('update_category');

        //product

        Route::get('/product', 'ProductController@index')->name('product');
        Route::post('/product', 'ProductController@Store')->name('product');
        Route::post('ckeditor/upload', 'ProductController@ckeditorupload')->name('upload');
        Route::get('/product/delete/{id}', 'ProductController@Delete')->name('delete_product');
        Route::post('/product/edit', 'ProductController@Edit')->name('edit_product');
        Route::post('/product/update', 'ProductController@update')->name('update_product');
    });
});