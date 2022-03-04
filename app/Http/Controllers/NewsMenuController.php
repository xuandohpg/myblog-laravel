<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsMenuController extends Controller
{
    public $newsMenu=array(
        array(
            "id"=>7,
            "name"=> "<i class='fa fa-home' aria-hidden='true'></i>",
            "slug"=>""
        ),
        array(
            "id"=>8,
            "name"=>"lmht",
            "slug"=>"lmht"
        ),
        array(
            "id"=>9,
            "name"=>"Liên Quân Mobile",
            "slug"=>"lien-quan-mobile"
        ),
        array(
            "id"=> 10,
            "name"=>"LMHT: TỐC CHIẾN",
            "slug"=>"lmht-toc-chien"
        ),
        array(
            "id"=> 11,
            "name"=>"GAMING GEAR",
            "slug"=>"gaming-gear"
        ),
        array(
            "id"=> 12,
            "name"=>"tin online",
            "slug"=> "tin-online"
        ),
        array(
            "id"=>13,
            "name"=>"pc/console",
            "slug"=>"pc-console"
        ),
    );
    public function index(){
        return $this->newsMenu;
    }
}
