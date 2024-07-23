<?php
# 檔案: address-book/parts/admin-required.php
# 若沒有登入 admin 則跳到登入頁

if (!isset($_SESSION)) {
  // 如果尚未啟動 session 的功能, 就啟動
  session_start();
}

if (!isset($_SESSION["admin"])) {
  # 如果沒有登入管理者, 就跳到登入頁, 結束程式
  header('Location: login.php');
  exit;
}
