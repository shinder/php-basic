<?php
session_start();
if (isset($_SESSION["admin"])) {
  # 有登入 admin 的
  include __DIR__ . '/list-admin.php';
} else {
  # 沒登入 admin 的
  include __DIR__ . '/list-no-admin.php';
}
