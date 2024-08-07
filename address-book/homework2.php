<?php
# address-book/add.php
require __DIR__ . '/parts/init.php';
$title = "依分類呈現商品";
$pageName = "cate_products";

# 取得用戶要看的分類編號
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

# 取得分類資料
$c_sql = "SELECT * FROM categories WHERE parent_id IS NULL";
$cates = $pdo->query($c_sql)->fetchAll();

# 依分類取得商品資料
if (empty($cate)) {
  $p_sql = "SELECT * FROM products";
} else {
  $p_sql = "SELECT * FROM products WHERE category_id=$cate ";
}
$prods = $pdo->query($p_sql)->fetchAll();
?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/html-navbar.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-3">
      <div class="d-grid gap-2">
        <?php foreach ($cates as $c) : ?>
          <?php if( $c['category_id'] == $cate ): ?>
            <a type="button" class="btn btn-primary">
              <?= $c['name'] ?>
            </a>
          <?php else: ?>
            <a type="button" class="btn btn-outline-primary" 
                href="?cate=<?= $c['category_id'] ?>">
              <?= $c['name'] ?>
            </a>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>

    <div class="col-9">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>編號</th>
            <th>作者</th>
            <th>書名</th>
            <th>出版日期</th>
            <th>價格</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($prods as $p): ?>
            <tr>
              <td><?= $p['product_id'] ?></td>
              <td><?= $p['author'] ?></td>
              <td><?= $p['book_name'] ?></td>
              <td><?= $p['publish_date'] ?></td>
              <td><?= $p['price'] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



<?php include __DIR__ . "/parts/html-scripts.php"; ?>
<?php include __DIR__ . "/parts/html-tail.php"; ?>