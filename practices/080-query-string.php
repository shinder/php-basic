<?php
# 由於 PHP 的全域變數可以不用宣告，直接設定使用即可
# isset() 判斷變數有沒有設定
# intval() 把變數轉換成整數

# $_GET 為內建變數，已幫我們轉換 query string parameters（查詢字元參數）為陣列
# $_GET['a'] 參數名稱為 a 的值
$a = isset($_GET["a"]) ? intval($_GET["a"]) : 0;

echo $a;