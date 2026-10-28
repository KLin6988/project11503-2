<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\MileStoneController;
use App\Http\Controllers\Admin\MileStoneTypeController;
use Illuminate\Support\Facades\Route;


/*
所有的網址 (超連結，href)或表單(form)都要在路由中設定
Route:路由
get:超連結
'admin':也可以用雙引號"admin", 表示網址 為http://127.0.0.1:8000/admin
如果是正式網站，則為http://www.xxx.com.tw/admin
https:SSL 加密機制，保證在資料傳輸過程中將資料加密，不易被解析，埠號（port)為443 

如果是用 Route::post, 通常是表單送資料到網站
AdminController::class, 當網址為http:127.0.0.1:8000/admin時，會執行AdminControllerr個程式"index", AdminControllerrello執行的功能(或函式，function)

為何是AdminController? 這是自己設定的，也可以改用別的程式
*/

Route::get('/admin', [AdminController::class, "index"]);
//登入的網址 因為resources/views/admin/admin/login.blade.php 中form 的method為 post所以用 Route::post
Route::post("/admin/login",[AdminController::class,"login"]);//登入
Route::get("/admin/home",[AdminController::class,"home"]);//後台首頁
Route::get("/manager/list",[ManagerController::class,"list"]);//帳號管理
Route::get("/manager/create",[ManagerController::class,"create"]);//新增帳號
Route::post("/manager/store",[ManagerController::class,"store"]);//儲存帳號
// {}: 表示有帶資料進來, {id} 中的id為變數名稱
// 如果是{id?}有問號，表示可能有帶資料，也可能沒帶資料 
Route::get("/manager/edit/{id}",[ManagerController::class,"edit"]);//修改帳號
Route::post("/manager/update",[ManagerController::class,"update"]);//更新帳號
Route::get("/manager/delete/{id}",[ManagerController::class,"delete"]);//刪除帳號
Route::post("/manager/checkAccount",[ManagerController::class,"checkAccount"]);//檢查帳號

//大事記管理
Route::get("/admin/milestone/list", [MileStoneController::class, "list"]);
//大事記管理
Route::get("/admin/milestone/types/list", [MileStoneTypeController::class, "list"]);
//新增大事記類別
Route::get("/admin/milestone/types/create", [MileStoneTypeController::class, "create"]);
//儲存大事記類別
Route::post("/admin/milestone/types/store", [MileStoneTypeController::class, "store"]);
