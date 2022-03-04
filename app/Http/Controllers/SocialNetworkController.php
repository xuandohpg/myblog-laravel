<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    public $socialNetwork=array(
        array(
            "id"=>1,
            "name"=> "<i class='fa fa-facebook' aria-hidden='true'></i>",
            "link"=> "https://www.facebook.com/gamek.vn"
        ),
        array(
            "id"=> 2,
            "name"=>"<i class='fa fa-youtube' aria-hidden='true'></i>",
            "link"=>"https://www.youtube.com/channel/UCjP9yT14KpY4R70KRfWNtNw"
        ),
        array(
            "id"=> 3,
            "name"=> "<i class='fa fa-instagram' aria-hidden='true'></i>",
            "link"=>"https://www.instagram.com/gamekvn/"
        ),
    );

    public function index(){
        return $this->socialNetwork;
    }
}
