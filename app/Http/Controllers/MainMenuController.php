<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainMenuController extends Controller
{
    public $mainMenu=array(
        array(
            "id"=>15,
            "name"=> "game mobile",
            "slug"=> "game-mobile"
        ),
        array(
            "id"=> 16,
            "name"=> "esport",
            "slug"=> "esport"
        ),
        array(
            "name"=>"khám phá",
            "slug"=>"kham-pha",
            "id"=>17
        ),
        array(
            "name"=> "manga-film",
            "slug"=> "manga-film",
            "id"=>18
        ),
        array(
            "name"=>"tin tức ",
            "slug"=>"tin-tuc",
            "id"=>19
        ),
        array(
            "name"=>"cộng đồng",
            "slug"=> "cong-dong",
            "id"=> 20
        ),
    );

    public function index(){
        return $this->mainMenu;
    }
}
