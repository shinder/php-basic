<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>110-form</title>
</head>

<body>
  <!-- 沒有設定 method 屬性時，預設值為 GET  -->
  <form name="form1" method="post" onsubmit="mySubmit(event)">
    <input type="text" name="account" placeholder="帳號">
    <br>
    <input type="password" name="password" placeholder="密碼" pattern="\d{6,}">
    <br>
    <input type="submit" value="送出">
    <br>
    <!-- *** button 如果在表單裡, type 預設為 submit -->
    <button type="button">按鈕</button>
  </form>

  <script>
    // e 為形式參數，接收傳入的 Event Object
    const mySubmit = function(e) {
      e.preventDefault();                   // 避免預設行為 (避免直接送出表單)
      // document.forms[0]                  // 取得表單
      // document.form1                     // 表單有 name 時, 取得表單
      // document.form1.elements            // 表單裡所有欄位
      // document.form1.elements['account'] // 取得 account 欄位的參照
      // document.form1.account             // 取得 account 欄位的參照
      // document.form1.account.value       // 取得 account 欄位的值
    };
  </script>
</body>

</html>