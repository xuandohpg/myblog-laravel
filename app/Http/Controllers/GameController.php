<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class GameController extends Controller
{
    public $game=array(
        array(
          "id"=>1,
          "status"=>1,
          "listCategoryId"=>[
            2,4
          ],
          "name"=>"viễn chinh mobile",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/12/2/icon-1638433858794381197976.png",
          "link"=>"https://gamek.vn/vien-chinh-mobile.htm"
        ),
        array(
          "id"=>2,
          "status"=>1,
          "listCategoryId"=>[
            2,4
          ],
          "name"=>"Đại Chiến Tứ Hồn",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/12/22/icon-app750x750-16401591054321222563735.png",
          "link"=>"https://gamek.vn/dai-chien-tu-hon.htm"
        ),
        array(
          "id"=>3,
          "status"=>1,
          "listCategoryId"=>[
            2,4
          ],
          "name"=>"Girl X School: Học Viện Siêu Nhiên",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/12/22/icon-gamek-1640161738406434606134.png",
          "link"=>"https://gamek.vn/girl-x-school-hoc-vien-sieu-nhien.htm"
        ),
        array(
          "id"=>4,
          "status"=>1,
          "listCategoryId"=>[
            2,3,4
          ],
          "name"=>"Kiếm Hiệp GO",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/11/8/icon-app-1636342814870125107454.png",
          "link"=>"https://gamek.vn/kiem-hiep-go.htm"
        ),
        array(
          "id"=>5,
          "status"=>1,
          "listCategoryId"=>[
            2,3
          ],
          "name"=>"Chiến Vương Tam Quốc",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/9/10/2414222421100124580867762202769761231130910n-1631261081330541868884.jpg",
          "link"=>"https://gamek.vn/chien-vuong-tam-quoc.htm"
        ),
        array(
          "id"=>6,
          "status"=>1,
          "listCategoryId"=>[
            2,4
          ],
          "name"=>"Vạn Niên Nhất Kiếm",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/8/2/1852086011493491906348967013596711760310842n-1627877167006502709712.jpg",
          "link"=>"https://gamek.vn/van-nien-nhat-kiem.htm"
        ),
        array(
          "id"=>7,
          "status"=>0,
          "listCategoryId"=>[
            3,4,2
          ],
          "name"=>"Tàng Kiếm Mobile",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/9/1/520x520-1630465305220605978693.png",
          "link"=>"https://gamek.vn/tang-kiem-mobile.htm"
        ),
        array(
          "id"=>8,
          "status"=>1,
          "listCategoryId"=>[
            3,4
          ],
          "name"=>"Starve Arena",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2022/1/27/logoc626253b-57d5-4384-9e26-ac6d4a26b73f-16432729544101178721988.jpg",
          "link"=>"https://gamek.vn/starve-arena.htm"
        ),
        array(
          "id"=>9,
          "status"=>1,
          "listCategoryId"=>[
            3,4
          ],
          "name"=>"Tam Quốc Ca Ca",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/7/16/512x512-1626406321890326498131.jpg",
          "link"=>"https://gamek.vn/tam-quoc-ca-ca.htm"
        ),
        array(
          "id"=>10,
          "status"=>0,
          "listCategoryId"=>[3],
          "name"=>"Tuyệt Kiếm Cổ Phong",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/6/11/avatar-162340057730931995321.jpg",
          "link"=>"https://gamek.vn/tuyet-kiem-co-phong.htm"
        ),
        array(
          "id"=>12,
          "status"=>0,
          "listCategoryId"=>[3],
          "name"=>"Cloud Song VNG",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/11/9/2173908401761393878748046975805303439457164n-16364379126481885563274.jpg",
          "link"=>"https://gamek.vn/cloud-song-vng.htm"
        ),
        array(
          "id"=>13,
          "status"=>0,
          "listCategoryId"=>[4,3],
          "name"=>"Người Trong Giang Hồ",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/7/16/512x512-16264065397661372261977.jpg",
          "link"=>"https://gamek.vn/nguoi-trong-giang-ho.htm"
        ),
        array(
          "id"=>14,
          "status"=>0,
          "listCategoryId"=>[3],
          "name"=>"Tứ Hoàng Mobile",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/3/26/avatar-1616755911080903698482.jpg",
          "link"=>"https://gamek.vn/tu-hoang-mobile.htm"
        ),
        array(
          "id"=>15,
          "status"=>1,
          "listCategoryId"=>[4,3],
          "name"=>"Badlanders",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2022/1/26/200x2000503ea876d-1e02-48c8-9130-6ed1b7310112-16431746694811534053773.png",
          "link"=>"https://gamek.vn/badlanders.htm"
        ),
        array(
          "id"=>16,
          "status"=>1,
          "listCategoryId"=>[4,3],
          "name"=>"Nhất Mộng Giang Hồ VNG",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/10/9/32daf2f872c4bb9ae2d5-1-16337983279462046521052.jpg",
          "link"=>"https://gamek.vn/nhat-mong-giang-ho-vng.htm"
        ),
        array(
          "id"=>17,
          "status"=>0,
          "listCategoryId"=>[3,2],
          "name"=>"Kiếm Thế ADNX Mobile",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/7/16/2159139781187598637954903025878963831332421n-16264068079081018719550.png",
          "link"=>"https://gamek.vn/kiem-the-adnx-mobile.htm"
        ),
        array(
          "id"=>18,
          "status"=>0,
          "listCategoryId"=>[4,3],
          "name"=>"One Punch Man: The Strongest",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/8/18/icon2-1629274231132591572755.png",
          "link"=>"https://gamek.vn/one-punch-man-the-strongest.htm"
        ),
        array(
          "id"=>19,
          "status"=>1,
          "listCategoryId"=>[3],
          "name"=>"Tam Sinh Kiếp",
          "image"=>"https://gamek.mediacdn.vn/zoom/90_90/133514250583805952/2021/8/2/1795297821124269976563346367647236098251185n-16278766834411422509053.jpg"
        )
    );
    public function index(Request $request){
        $result=[];
        if(!empty($request->input('status'))){
            $status=$request->input('status');
            foreach($this->game as $item){
                if($item['status']==$status){
                    $result[]=$item;
                }
            }
        }
        else if(!empty($request->input('idCategory'))){
            $idCategory=$request->input('idCategory');
            foreach($this->game as $item){
                foreach($item['listCategoryId'] as $id){
                    if($id==$idCategory){
                        $result[]=$item;
                    }
                }
            }
        }
        else{
            $result=$this->game;
        }
        return $result;
    }
    public function getListNewsGame(){
        $result=[];
        foreach($this->game as $item){
            if($item['status']==1){
                $result[]=$item;
            }
        }
        return $result;
    }

}