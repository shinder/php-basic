<?php
# date_default_timezone_set('Asia/Taipei');  # 無法變更設定檔時, 暫時變更時區

# date() 將 timestamp 轉換為一般的日期格式
printf('<h2>%s</h2>', date("Y-m-d H:i:s"));
printf('<h2>%s</h2>', date("Y-m-d H:i:s", time() + 30 * 24 * 60 * 60));
printf('<h2>%s</h2>', date("星期幾 D w", time() + 30 * 24 * 60 * 60));

# strtotime() 將日期字串轉換為 timestamp
$t = strtotime('2024/02/29');
printf('<h2>%s</h2>', date("Y-m-d", $t));

$t2 = strtotime('2023/02/29');
var_dump($t2);
printf('<h2>%s</h2>', date("Y-m-d", $t2));

$t3 = strtotime('2023/02/32');
var_dump($t3);
printf('<h2>%s</h2>', date("Y-m-d", $t3));
