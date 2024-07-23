<?php
require __DIR__ . '/parts/admin-required.php';
require __DIR__ . '/parts/init.php';

$title = "通訊錄列表";
$pageName = "ab_list";

$perPage = 20; # 表示一頁最多有 20 筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
  header('Location: ?page=1'); # 跳轉頁面
  exit; # 結束程式, die()
}
$where = ' WHERE 1 ';  # SQL 條件開頭
# 搜尋功能，搜尋兩個欄位：name, mobile
$search = $_GET['search'] ?? '';  # ?? 的左側若為 undefined 則使用右側的值
if ($search) {
  $search_esc = $pdo->quote("%{$search}%");  # SQL 特殊字元跳脫並包裹單引號
  $where .= " AND ( `name` LIKE $search_esc OR `mobile` LIKE $search_esc ) ";
}

# 生日起始日期，轉換為 timestamp
$birthday_begin = isset($_GET['birthday_begin']) ? strtotime($_GET['birthday_begin']) : false;
if($birthday_begin !== false) {
  # 轉換為單引號包起來的日期格式
  $birthday_begin = $pdo->quote(date("Y-m-d", $birthday_begin));
  $where .= " AND `birthday` >= $birthday_begin ";
}
# 生日結束日期，轉換為 timestamp
$birthday_end = isset($_GET['birthday_end']) ? strtotime($_GET['birthday_end']) : false;
if($birthday_end !== false) {
  $birthday_end = $pdo->quote(date("Y-m-d", $birthday_end));
  $where .= " AND `birthday` <= $birthday_end ";
}

$t_sql = "SELECT COUNT(1) FROM address_book $where ";
// echo $t_sql; exit;  # 除錯時使用，查看 SQL 語法
# 取得總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
# 設定預設值
$totalPages = 0;
$rows = [];
if ($totalRows) {
  # 計算總頁數
  $totalPages = ceil($totalRows / $perPage);
  if ($page > $totalPages) {
    header('Location: ?page=' . $totalPages); # 跳轉頁面到最後一頁
    exit; # 結束程式
  }

  # 取得該頁的資料
  $sql = sprintf(
    "SELECT * FROM address_book %s ORDER BY ab_id DESC LIMIT %s, %s",
    $where,
    ($page - 1) * $perPage,
    $perPage
  );
  # 取得該頁資料
  $rows = $pdo->query($sql)->fetchAll();
}

?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/html-navbar.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-6">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
            if ($i >= 1 && $i <= $totalPages) :
              $qs = array_filter($_GET);  # 複製 Query String 參數, 並去除沒有值的參數
              $qs['page'] = $i;
              # http_build_query($qs) 將陣列轉換為 urlencoded 格式
          ?>
              <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                <a class="page-link" href="?<?= http_build_query($qs) ?>"><?= $i ?></a>
              </li>
          <?php
            endif;
          endfor; ?>
        </ul>
      </nav>
    </div>
    <div class="col-6">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
               name="search" value="<?= htmlentities($search) ?>">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><i class="fa-solid fa-trash"></i></th>
            <th>編號</th>
            <th>姓名</th>
            <th>電郵</th>
            <th>手機</th>
            <th>生日</th>
            <th>地址</th>
            <th><i class="fa-solid fa-pen-to-square"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
              <td>
                <!--
                <a href="del.php?ab_id=<?= $r['ab_id'] ?>" onclick="return confirm(`是否要刪除編號為 <?= $r['ab_id'] ?> 的資料?`)">
                -->
                <a href="javascript: deleteOne(<?= $r['ab_id'] ?>)">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </td>
              <td><?= $r['ab_id'] ?></td>
              <td><?= $r['name'] ?></td>
              <td><?= $r['email'] ?></td>
              <td><?= $r['mobile'] ?></td>
              <td><?= $r['birthday'] ?></td>
              <td><?= htmlentities($r['address']) ?></td>
              <td>
                <a href="edit.php?ab_id=<?= $r['ab_id'] ?>">
                  <i class="fa-solid fa-pen-to-square"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include __DIR__ . "/parts/html-scripts.php"; ?>
<script>
  const deleteOne = (ab_id) => {
    if (confirm(`是否要刪除編號為 ${ab_id} 的資料??`)) {
      location.href = `del.php?ab_id=${ab_id}`;
    }
  };
</script>

<?php include __DIR__ . "/parts/html-tail.php"; ?>