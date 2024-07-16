<?php

require __DIR__ . '/connect-settings.php';

$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', DB_HOST, DB_NAME);

$pdo_options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, DB_USER, DB_PASS, $pdo_options);



/*
# 執行一個 sql 語句, 取得 PDOStatement 類型的物件
$stmt = $pdo->query("SELECT * FROM address_book LIMIT 3");

# 呼叫 fetch() 取得一筆資料
$row = $stmt->fetch();

# 輸出 JSON 格式
echo json_encode($row);
*/