<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //登入後台
    public function index()
    {
        /*
        回傳admin資料夾下的login 網頁login的副檔名為.blade.php 
        所有的網頁都在resources/views之下
        1.新增Admin/AdminController
        2.在Admin/AdminController新增index() function
        3.在resources/views新增資料夾
        4.在resources/views/admin資料夾新增login.blade.php檔案
        5.在routes/web.php新增路由Route::get("/admin", [AdminController::class, "index"]);
        6.routes/web.php 要 use App\Http\Controllers\Admin\AdminController
        7.如果server沒有啟動，在終端機輸入php artisan serve, 啟動伺服器
        8.在劉覽器輸入http://127.0.0.1:8000/admin即可看到後台登入頁面
        9.將原始網頁(html)資料夾下的css及js 資料夾，複製到public資料夾之下

        目前主流框架（主流程式)都是MVC架構
        M:model(與資料表相關) V:view(網頁):controll控制器（決定是否要取資料表資料以及要顯示哪個網頁)
        .net MVC  、Java:sprint boot 、Laravel(PHP)  、 VUE、angular 、react等
        */
        return view("admin.login");
    }
}
