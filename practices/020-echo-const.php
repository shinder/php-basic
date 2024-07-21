<?php
# PHP 預設的 Content-Type 為 text/html
# 檔頭的設定要放在主題內容之前
// header('Content-Type: text/plain');
?>
<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  const MY_PI = 3.14;

  # echo 為輸出至頁面
  echo 12 + 34;
  echo '<br>';
  echo __DIR__; # 這支 php 所在的資料夾位置 (磁碟位置)
  echo '<br>';
  echo __FILE__; # 這支 php 的完整的路徑
  echo '<br>';
  echo MY_PI;
  ?>
</body>

</html>