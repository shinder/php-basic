<?php

require __DIR__ . '/parts/init.php';

$sql = "SELECT * FROM address_book ORDER BY ab_id DESC LIMIT 5 ";
$stmt = $pdo->query($sql);

$i = 0;
while ($row = $stmt->fetch()) {
  echo "<div> $i: {$row['name']} </div>";
  $i++;
}
