<?php
require __DIR__ . '/parts/admin-required.php';
require __DIR__ . '/parts/init.php';
header('Content-Type: application/json');

$output = [
  'success' => false,
  'bodyData' => $_POST, # 除錯用
  'code' => 0, # 除錯用
];

// TODO: 表單欄位的資料檢查
$ab_id = isset($_POST['ab_id']) ? intval($_POST['ab_id']) : 0;
if (empty($ab_id)) {
  $output['code'] = 400;
  echo json_encode($output);
  exit;
}
$name = $_POST['name'] ?? ''; # ?? 如果 ?? 的左邊為 undefined, 就使用右邊的值
if (mb_strlen($name) < 2) {
  $output['code'] = 405;
  echo json_encode($output);
  exit;
}


$birthday = $_POST['birthday'];
$ts = strtotime($birthday); # 轉換成 timestamp
if ($ts === false) {
  $birthday = null; # 如果不是日期的格式, 就使用 null
} else {
  $birthday = date('Y-m-d', $ts);
}

$sql = "UPDATE `address_book` SET 
    `name`=?,
    `email`=?,
    `mobile`=?,
    `birthday`=?,
    `address`=?
    WHERE `ab_id`=? ";

$stmt = $pdo->prepare($sql); # 準備 sql 語法, 除了 "值" 語法要合法
$stmt->execute([
  $name,
  $_POST['email'],
  $_POST['mobile'],
  $birthday,
  $_POST['address'],
  $ab_id,
]);

$output['success'] = !!$stmt->rowCount();
echo json_encode($output);
