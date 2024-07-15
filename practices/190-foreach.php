<?php
header('Content-Type: text/plain');

$ar4 = [
  123,
  'name' => 'David',
  'age' => 25,
  'Hello~',
];

# 使用 foreach/as 迴圈取出陣列內容
foreach ($ar4 as $k => $v) {
  echo "$k : $v \n\n";
}
