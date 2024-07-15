<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!--
  <pre> 標籤中間的「空白」字元會被忠實呈現
  -->
  <pre><?php print_r($_POST) ?></pre>
  <form name="form1" method="post">
    <input type="text" name="account" placeholder="帳號">
    <br>
    <input type="password" name="password" placeholder="密碼">
    <br>
    <input type="submit" value="送出">
  </form>
</body>

</html>