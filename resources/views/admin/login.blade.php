<!--
1.請用visual studio code 或文字編輯器
2. 打開給你們的網頁原始檔admin/login.html
3.按Ctrl+A鍵，全選
4.按Ctrl+C，複製
5.點選resource/views/admin/login.blade.php
6.Ctrl+V，貼上
7.把css, js 路徑改為從根目錄開始，在20,55,56
-->

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>test-後台登入 — 品牌名稱 管理系統</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- 前台與後台共用同一份 CSS -->
  <link rel="stylesheet" href="/css/style.css" />
</head>
<body class="admin-login">
  <div class="auth-card">
    <div class="auth-logo"><div class="logo-box">B</div><span>品牌名稱</span></div>
    <div class="auth-title">
      <h2>後台管理系統</h2>
      <p>請使用管理員帳號登入（示範：admin / admin1234）</p>
    </div>

    <form data-login>
      <div class="form-group">
        <label class="form-label" for="username">帳號</label>
        <div class="input-icon-wrap">
          <i class="fa fa-user-shield icon"></i>
          <input type="text" id="username" name="username" class="form-control" required autofocus />
        </div>
      </div>
      <div class="form-group">
        <label class="form-label" for="password">密碼</label>
        <div class="input-icon-wrap">
          <i class="fa fa-lock icon"></i>
          <input type="password" id="password" name="password" class="form-control" required />
          <span class="pw-toggle" onclick="togglePw('password',this)"><i class="fa fa-eye"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label class="form-check"><input type="checkbox" name="remember" value="1" /> 記住我</label>
      </div>
      <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in-alt"></i> 登入後台</button>
    </form>
    <div class="auth-footer"><a href="../index.html"><i class="fa fa-arrow-left"></i> 回到前台</a></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="/js/main.js"></script>
  <script src="/js/admin.js"></script>
</body>
</html>
