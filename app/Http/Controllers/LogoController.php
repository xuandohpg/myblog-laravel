<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoController extends Controller
{
    public $logo=array(
        "id"=>1,
        "link_image"=>"https://gamek.mediacdn.vn/web_images/logogamkcbv.png"
    );
    public function index(){
        return $this->logo;
    }
}
