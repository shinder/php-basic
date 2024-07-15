<?php
$name = 'Shinder';

echo "Hello $name <br>";  # 雙引號會把變數值帶入
echo 'Hello $name <br>';  # 單引號直接呈現內容
echo "Hello {$name}123 <br>";  # 變數緊接著其它字元輸出時使用 {} 包裹
