<?php
header('Content-Type: application/json');

$ar1 = [
  'name' => '小新',
  'age' => 25,
  'Hello~',
];

# json_encode() 將 PHP 陣列轉換為 JSON 字串（JSON 的陣列格式或物件）
# JSON_UNESCAPED_UNICODE 為內建常數，不做 unicode 跳脫
echo json_encode($ar1, JSON_UNESCAPED_UNICODE);
