<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 沒有設定 method 屬性時，預設值為 GET  -->
  <!-- 表單欄位的名稱和值會變成 query string  -->
  <form action="">
    <input type="text" name="account" placeholder="帳號">
    <br>
    <input type="password" name="password" placeholder="密碼">
    <br>
    <input type="submit">
  </form>

  <script>
    // 注意頁面是否刷新，console 的內容是否清空
    console.log('123');
  </script>
</body>

</html>