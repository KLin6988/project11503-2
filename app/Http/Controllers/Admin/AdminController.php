<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Manager;
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

    //後台登入 Request::接收表單送過來的資料的物件 $req為變數名稱，可以用自己喜歡的名稱
    //Request:接收，Response: 回應給使用者的資料
    public function login(Request $req)
    {
        // 帳號，$req->userId為admin/login.blade.php 中name="userId"
        $userId = $req->userId;
        // 密碼, $req->password為admin/login.blade.php 中name="password"
        // $pwd為接收密碼資料後暫存的名稱，名稱不一定要用password,可自己取名
        $pwd = $req->password;

     /*
        //1.建立model: php artisan make:model Manager
        2.開啟app/Models/Manager.php, 詳如Manager.php
        3.呼叫Manager中的方法(例如: checkManager())。 確認帳號及密碼是否存在
        4.如果帳號及密碼均錯誤，則回到上一頁，並帶回原本輸入的資料及錯誤訊息
        5.如果帳號及密碼均正確，則進入後台管系統/admin/home

    */

    /*
    ★★★Manager 是class(類別)，要使用Manager中的function一定要先new Manager(建立物件)
    然後才能呼叫Manager中的方法，例如checkMaanger
    例:    
    $manager = new Manager();
    $list = $manager->checkManager($userId, $pwd);

    上面2行可以合併成一行如下:
    $list = (new Manager())-> checkManager($userId, $pwd);
    */
    //檢查manager資料表中是否有相同的帳號及密碼
    
    $list = (new Manager())-> checkManager($userId, $pwd);

    if (empty($list)) //is null
    {
        /*
        //empty: 空的empty($list) 空的list , 表示manager資料表中找不到所輸入的帳號及密碼相同者 
        back():回到上一頁
        withInput():回到上一頁後，帶回原本輸入的帳號及密碼
        withErrors():回到上一頁，帶回錯誤訊息，msg:自行命名的名稱

        */
        return back()-> withInput()->withErrors(["msg" => "帳號或密碼錯誤"]);
    }else{
        /*
        所輸入的帳號及密碼正確
        session():暫存在伺服器
        put():設定
        session()->put("userId",$userId):將所輸入的帳號及密碼存在伺服器中，名稱為"userId"
        */
        session()->put("userId", $userId);
        //轉址到後台首頁
        return redirect("/admin/home");
    }
    }
}
