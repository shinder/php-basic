<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>240-form-post</title>
</head>

<body>
  <!--
    預設值 enctype="application/x-www-form-urlencoded"
    若要上傳檔案使用 enctype="multipart/form-data"
  -->
  <form name="form1" method="post" action="./240-post-data.php" enctype="application/x-www-form-urlencoded">
    <input type="text" name="account" placeholder="帳號">
    <br>
    <input type="password" name="password" placeholder="密碼">
    <br>
    <input type="submit" value="送出">
  </form>
</body>

</html>