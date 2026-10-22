<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //$timestamps為public
    //$timestamps = false,  不要使用laravel的create_at(建立時間)及update_at（修改時間)二個時間欄位
    public $timestamps = false;
    //資料表名稱為
    protected $table = "manager";
    //主鍵為id，$primaryKey的K為大寫
    protected $primaryKey = "id";
    //資料表欄位 (會用到的欄位都要寫進來)
    protected $fillable = ["id","userId","pwd"];
    /*
      檢查manager資料表中是否有相同的帳號及密碼
      checkManager:方法名稱
      checkManager(string $userId, string $pwd): 這個方法傳入二個資料(userId, pwd)
      string $userId:表示傳入的帳號為文字，string這個字可以省略不寫
    */
    public function checkManager(string $userId, string $pwd)
    {
        /*
        self: manager自己的資料表
        first():取回第一筆資料 (LIMIT 1)
        查詢語法為
        SELECT * FROM manager WHERE userId = 傳入的 user Id AND pwd = 傳入的 pwd LIMIT 1
        查詢的結果放在$manager這個變數中，然後將結果回傳(return)給呼叫的程式
        */
    $manager = self::where("userId". $userId)->where("pwd",$pwd)->first();
    return $manager;
    }

    //檢查帳號
    public function checkAccount(string $userId)
    {
        //相關說明參閱上方的checkManager
        $manager = self::where("userId", $userId)->first();
        return $manager;
    }

}
