<?php
require __DIR__ . '/parts/admin-required.php';
# address-book/add-api.php
require __DIR__ . '/parts/init.php';
header('Content-Type: application/json');

$output = [
  'success' => false,
  'bodyData' => $_POST, # 除錯用
];

# 表單欄位的資料檢查
# filter_var() 可以用來檢查 email 格式
# filter_var('bob@example.com', FILTER_VALIDATE_EMAIL)

$birthday = $_POST['birthday'];
$ts = strtotime($birthday); # 轉換成 timestamp
if ($ts === false) {
  $birthday = null; # 如果不是日期的格式, 就使用 null
} else {
  $birthday = date('Y-m-d', $ts);
}

/*
// 錯誤的作法: SQL injection 的問題
$sql = "INSERT INTO `address_book`( 
  `name`, `email`, `mobile`,
  `birthday`, `address`, `created_at`
  ) VALUES (
    '{$_POST['name']}', '{$_POST['email']}', '{$_POST['mobile']}',
    '{$_POST['birthday']}', '{$_POST['address']}', NOW()
  )";
$stmt = $pdo->query($sql);
*/
$sql = "INSERT INTO `address_book`( 
  `name`, `email`, `mobile`,
  `birthday`, `address`, `created_at`
  ) VALUES (
    ?, ?, ?, 
    ?, ?, NOW()
  )";

$stmt = $pdo->prepare($sql); # 準備 sql 語法, 除了 "值" 語法要合法
$stmt->execute([
  $_POST['name'],
  $_POST['email'],
  $_POST['mobile'],
  $birthday,
  $_POST['address'],
]);

$output['success'] = !!$stmt->rowCount();
echo json_encode($output);
