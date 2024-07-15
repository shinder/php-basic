<?php
header('Content-Type: application/json');

$a = isset($_POST['a']) ? intval($_POST['a']) : 0;
$b = isset($_POST['b']) ? intval($_POST['b']) : 0;

echo json_encode([
  'a' => $a,
  'b' => $b,
  'result' => $a + $b,
]);