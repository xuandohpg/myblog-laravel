<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('tin-tuc/{slug?}-{id?}.html', function ($slug=null,$id=null) {
        return "slug=".$slug."<br>id=".$id;
    })->where(
        [
        "slug"=>'.+',//'.+'
        "id"=>"[0-9]+"
        ]
    )->name('admin.tin-tuc');
    //cach dung route name
    //echo route("admin.tin-tuc",['hdfdf-ddfdfd-ddf-33','15532522'])
    //admin/tin-tuc/shfdif-sdfsdf-666-11666.html
});
Route::get('/user/{name}-{id}', function ($name, $id) {
    return "id=".$id."<br>name=".$name;
})->where(['name' => '.+','id' => '[0-9]+']);