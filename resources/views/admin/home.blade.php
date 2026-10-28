後台首頁
<div><a href="/manager/list">帳號管理</a></div>
<!--
帳號管理
1.新增ManagerController: php artisan make:controller Admin/ManagerController
2.在ManagerController中新增public function list():帳號列表
3.在路由routes/web.php中新增/manager/list
4.在resource/views/admin新增ger資料資料夾
4.在resource/views/admin/manager新增list.blade.php

大事紀管理
1.新增Admin/MileStoneController:  php artisan make:controller Admin/MileStoneController
2.在Admin/MileStoneController中新增public function list()
3.在路由routes/web.php中新增/admin/milestone/list
4.在resources/views/admin中新增milestone資料夾
5.在resources/views/admin/milestone中新增list.blade.php
6.用viual studio code （或紀事本等文書編輯器)開啟原始網頁html/admin/milestones.html
7.將原始網頁html/admin/milestones.html全選後複製到resources/views/admin/milestone/list.blade.php
8.新增大事記類別管理控制器
Admin/MileStoneTypeController:  php artisan make:controller Admin/MileStoneTypeController
9.在大事記類別管理控制器(Admin/MileStoneTypeController)中新增public function list()
10.在路由中新增admin/milestone/type/list
11.在resources/views/admin/milestone中新增types資料夾(大事記類別)
12.在resources/views/admin/milestone/types中新增list.blade.php(大事記類別表)
13.在大事記類別管理控制器(Admin/MileStoneTypeController)中新增public function list()(新增大事記類別)
14.在路由中新增admin/milestone/type/create(新增大事記類別)
15.在resources/views/admin/milestone/types中新增create.blade.php(新增大事記類別)
16.新增Milestone類別的Model:  php artisan make:model Milestone/MileStoneType
17.新增Milestone的Model:  php artisan make:model Milestone/MileStone
18.新增大事記類別資料表(milestone_type), 欄位(id A_I, label varchar(10), title varchar(10))
19.新增大事記類別(milestone), 欄位（id A_I, years char(4), months char(2), title varchar(200)，content varchar(500), typeId int, createTime timestamp default: CURRENT_TIMESTAMP)
如何知道要建哪些欄位 ?查看前台及後台網頁及html, 有哪些資料要入資料表
20. 完成MileStoneType及MileStone二個model內容
21.在MileStoneTypeController的list function 中取出MileStoneType model 資料
22.在MileStoneTypeController的list function中的資料渲染到resources/views/admin/milestone/types/list.blade.php
23.將原始網頁html/admin/milestones.html全選後複製到resources/views/admin/milestone/list.blade.php(借用這個網頁，然後再修改欄位)
24.在瀏覽器輸入http://127.0.0.1:8000/admin/milestone/types/list
25.修改resources/views/admin/milestone/types/list.blade.php
將 <link rel="stylesheet" href="../css/style.css" />.. 回到上一層 ../../回到上二層，相對路徑
改為 <link rel="stylesheet" href="css/style.css" />從根目錄開始，絕對路徑
然後開始套程式



-->