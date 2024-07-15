<?php
header('Content-Type: application/json');

$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;

echo json_encode([
  'a' => $a,
  'b' => $b,
  'result' => $a + $b,
]);
