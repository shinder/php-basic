<?php

require __DIR__ . '/parts/init.php';

$sql = "SELECT * FROM address_book ORDER BY ab_id DESC LIMIT 5 ";
$stmt = $pdo->query($sql);

# $r = $stmt->fetch(); // 取得一筆資料（第一筆）
# $r = $stmt->fetch(); // 取得一筆資料（第二筆）

# 取得剩下的資料
$rows = $stmt->fetchAll(); # 使用 fetchAll() 之前, 基本上不要使用 fetch()


# $rows = $pdo->query($sql)->fetchAll();

header('Content-Type: application/json'); # 告訴瀏覽器內容為 JSON
echo json_encode($rows, JSON_UNESCAPED_UNICODE);
