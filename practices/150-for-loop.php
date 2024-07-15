<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <style>
        table {
            font-family: monospace, monospace;
            border-collapse: collapse;
        }
        td {
            background-color: #ffffff;
            width: 25vw;
            height: 50px;
            text-align: left;
        }
        tr {
            border-bottom: 1px solid #dddddd;
        }
        tr:nth-of-type(even) td {
            background-color: #f3f3f3;
        }
    </style>
</head>

<body>
  <?php /*
  <table border="1">
    <?php for ($i = 1; $i <= 9; $i++) : ?>
      <tr>
        <?php for ($k = 1; $k <= 9; $k++) : ?>
          <!--
          <td><?= "$i * $k = " . $i * $k
              ?></td>
        -->
          <td><?php printf("%s * %s = %s", $i, $k, $i * $k) ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
*/ ?>
  <table>
    <?php for ($i = 1; $i <= 9; $i++) : ?>
      <tr>
        <?php for ($k = 1; $k <= 9; $k++) : ?>
          <!--
          <td><?= "$i * $k = " . $i * $k
              ?></td>
        -->
          <td><?= sprintf("%s * %s = %s", $i, $k, $i * $k) ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>

</html>