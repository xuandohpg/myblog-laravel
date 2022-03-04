<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public $banner=array(
        "id"=>1,
        "link_image"=>"https://gamecuoi.com/wp-content/uploads/2021/10/hinh1-thumb.jpg",
        "link"=>"https://haitac.568play.vn/"
    );

    public function index(){
        return $this->banner;
    }
}
