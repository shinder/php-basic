<?php
header('Content-Type: application/json');

# 將取得的表單資料，以 JSON 格式輸出
echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
