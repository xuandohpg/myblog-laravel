<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public $sidebar=array(
        array(
          "id"=> 1,
          "link_image"=>"https://cdnstoremedia.com/adt/adn/2021/11/lv883-adx6191cc4857e30.gif",
          "link"=>"https://senvoi.vn/tu-chau/chau-lavabo/chau-lavabo-dat-ban-zento-lv6071-320x290x110.html"
        ),
        array(
          "id"=>2,
          "link_image"=>"https://cdnstoremedia.com/adt/adn/2020/10/8970--adx61b6bb20908de.gif",
          "link"=>"https://senvoi.vn/tu-chau/tu-chau-lavabo-pvc/bo-tu-chau-ban-da-ke-guong-lavabo-ztlv892-canh-laminate-van-go.html"
        ),
        array(
          "id"=>3,
          "link_image"=>"https://cdnstoremedia.com/adt/adn/2021/09/300x6-adx616f8a40f4068.jpg",
          "link"=>"https://admicro.vn/"
        ),
    );
    public function index(){
        return $this->sidebar;
    }
}
