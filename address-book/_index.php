<?php
# 設定目錄路徑
$directory = __DIR__;

# 使用 scandir() 函數讀取目錄中的所有檔案和目錄
$files = scandir($directory);

# 過濾掉 '.' 和 '..' 這兩個特殊目錄
#$files = array_diff($files, ['.', '..']);

# 輸出檔名
foreach ($files as $file) {
  if($file[0] != '.')
    echo "<p><a href='{$file}'>{$file}</a></p>";
}