<?php
# 用來設定傳給用戶端的檔頭(標頭)
# 告訴用戶端, 內容是 "純文字"
header('Content-Type: text/plain');

$name = 'Shin\'

der';  # 單引號或雙引號包裹的字元內容，中間都可以換行

echo "泥好\n, $name

<br>
";
