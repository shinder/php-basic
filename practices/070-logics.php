<?php
# ! 為 not，單元運算子
# && || 為使用符號的邏輯運算子
# and or 為使用英文字的邏輯運算子，優先權比 = 還要低
# 兩組的結果皆為布林值 bool

$a = 7 && 5; # 結果是布林值

var_dump($a);
echo '<br>';

$b = 7 and 5; # 同下列式子
# ($b = 7) and 5;

var_dump($b);
echo '<br>';
$c = (7 and 5);  # 結果是布林值

var_dump($c);
echo '<br>';