<?php
$str = file_get_contents("./../data/products.json");
$ar = json_decode($str, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>編號</td>
      <td>作者</td>
      <td>書名</td>
      <td>出版日期</td>
      <td>價格</td>
    </tr>
    <?php foreach($ar as $r): ?>
    <tr>
      <td><?= $r['product_id'] ?></td>
      <td><?= $r['author'] ?></td>
      <td><?= $r['book_name'] ?></td>
      <td><?= $r['publish_date'] ?></td>
      <td><?= $r['price'] ?></td>
    </tr>
    <?php endforeach ?>
  </table>
</body>
</html>

