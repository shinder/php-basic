<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<?php
$age = isset($_GET["age"]) ? intval($_GET["age"]) : 0;
if ($age >= 18) :
?>
  <h2>歡迎光臨</h2>
  <img src="./../images/0ffbab4320267befef9e0fa1f7e13502.png" alt="">
<?php else : ?>
  <h2>謝絕訪問</h2>
  <img src="./../images/a17e96b7884bba60c0a2cf9b27f8ee48.png" alt="">
<?php endif; ?>
</body>

</html>