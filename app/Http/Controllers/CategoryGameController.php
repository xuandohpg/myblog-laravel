<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryGameController extends Controller
{
    public $categoryGame=array(
        array(
          "id"=>1,
          "name"=>"MỚI"
        ),
        array(
          "id"=>2,
          "name"=>"mobile esports"
        ),
        array(
          "id"=>3,
          "name"=>"mobile casual"
        ),
        array(
          "id"=>4,
          "name"=>"mobile NHẬP VAI"
        ),
        array(
          "id"=>99,
          "name"=>"Xem tất cả..."
        )
    );
    public function index(){
        return $this->categoryGame;
    }
}
