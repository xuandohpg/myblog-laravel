<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterMenuController extends Controller
{
    public $footerMenu=array(
        array(
            "id"=>1,
            "name"=>"trang chủ",
            "slug"=>"trang-chu"
        ),
        array(
            "id"=>2,
            "name"=>"tin online",
            "slug"=>"tin-online"
        ),
        array(
            "id"=> 3,
            "name"=> "thị trường",
            "slug"=>"thi-truong"
        ),
        array(
            "id"=>4,
            "name"=>"pc console",
            "slug"=>"pc-console"
        ),
        array(
            "id"=>5,
            "name"=>"game mobile",
            "slug"=>"game-mobile"
        ),
        array(
            "id"=>6,
            "name"=>"rss",
            "slug"=>"rss"
        ),
    );

    public function index(){
        return $this->footerMenu;
    }
}
