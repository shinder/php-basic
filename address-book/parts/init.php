<?php
if (!isset($_SESSION)) {
  // 如果尚未啟動 session 的功能, 就啟動
  session_start();
}

const PATH_BASE = '/php-basic';

require __DIR__. '/db-connect.php';
