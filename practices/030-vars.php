<?php
# 變數規定要以 $ 字元為開頭
$name = 'Shinder';

echo $name . ' 您好<br>';  # . 做字串的串接

$my_var = 66;
$b = "22";
$c = "abc";

echo $my_var + $b; # + 只做數值的相加
echo "<br>";
// echo $my_var + $c; # 無法直接轉換為數值的字串，在做 + 運算時會發生錯誤
echo "<br>";