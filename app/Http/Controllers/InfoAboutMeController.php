<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoAboutMeController extends Controller
{
    public $infoAboutMe=array(
        array(
          "id"=> 1,
          "title"=>"Công ty Cổ phần VCCorp",
          "content"=>" Tầng 17, 19, 20, 21 Toà nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.<br> Giấy phép thiết lập trang thông tin điện tử tổng hợp trên internet số 3634/GP-TTĐT do Sở <br> Thông tin và Truyền thông TP Hà Nội cấp ngày 06/09/2017"
        ),
        array(
          "id"=>2,
          "title"=> "Ban biên tập GameK",
          "content"=> "<p>Tầng 21, Tòa nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.<br>Điện thoại: 024.7309.5555 Máy lẻ 41301 <br> Email: <a href='mailto:info@gamek.vn' rel='nofollow'>info@gamek.vn</a><br>Chịu trách nhiệm quản lý nội dung: Bà Nguyễn Bích Minh<br>VPĐD tại TP.HCM: Tầng 6 Tòa nhà 123<br>123 Võ Văn Tần, phường 6, quận 3, Tp. HCM</p>"
        ),
        array(
          "id"=> 3,
          "title"=> "Liên hệ quảng cáo: Admicro",
          "content"=> "<br>Hotline hỗ trợ quảng cáo: 0942 86 11 33<br>Email: giaitrixahoi@admicro.vn<br><strong>Hỗ trợ &amp; CSKH: Admicro</strong><br>Address: Tầng 20, Tòa nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.</p>"
        ),
    );
    public function index(){
        return $this->infoAboutMe;
    }
}
