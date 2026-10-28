<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Milestone\MileStoneType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MileStoneTypeController extends Controller
{
    //列表
    public function list()
    {
        $list = MileStoneType::get();
        return view("admin.milestone.types.list", compact("list"));
    }
    //新增
    public function create()
    {
        /*
        //借用admin/manager/create1.blade.php
        複製admin/manager/create1.blade.php 到 admin/milestone/types/create.blade.php
        2.將create1.blade.php重新命名為create.blade.php
        */
    return view("admin.milestone.types.create");
    }

    //儲存
    public function store(Request $req)
    {
        //從creat.blade.php 中有送資料過來，所有要用Request物件接收
        //$req是物件變數名稱，可以自己命名
        //要生產生leStoneTypee 物件，才能使用件中的屬性及方法
        //記得要e App/Models\MileStone\MileStoneType; (可以用選的或enter)
        $types = new MileStoneType();
        $types->label = $req->label;
        $types->title = $req->title;
        $types->save();

        // use Illuminate\Support\Facades\Session;
        // flash:快閃，也就是只會出現一次，message:自己命名的名稱
        Session::flash("message", "已新增");
        //轉址

        /*
        1.進入sweetalert2網站 https://sweetalert2.com
        2.點選左側選單中的iNSTALLATION
        3.點選jsDeliver CDN
        4.
        <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.all.min.js"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.min.css" rel="stylesheet">
        5.貼到lestone/types/list.blade.php, src=及 href=不能換行
        6.sweetalert2的語法一定要放在網頁的<body></body>中

        */ 
                return redirect("/admin/milestone/types/list");
    }
    //修改
    public function edit(Request $req)
{
    /*
    修改大事記類別
    1.在MileStoneTypeController中新增edit(Request req)的function
    2.因為要知道修改哪一筆資料，list.blade.php網頁中有傳送id, 所以要有Request物件
    3.在路由加上Route::get（"/admin/milestone/types/edit/{id}", [MileStoneTypeController::class, "edit"]);
    4.{id}:} 中的id，為變數名稱，取用時用$req->id, 二個id的名稱要一樣
    5.在admin/milestone/types中新增edit.blade.php
    6.將admin/milestone/types/create.blade.php的內容全選，複製到edit.blade.php中
    7.修改edit.blade.php
    */

    // sql語法為SELECT
    $types = MileStoneType::find($req->id);
    return view("admin.milestone.types.edit", compact("types"));
}
}