<?php
$hash = '$2y$10$gi7ldq1x0FU64onECqbplOm56LQDqfOBLeN5VaG1C9Z1MsmqfvTSa';

$pass = '123456';

# 驗證雜湊碼是不是由這個密碼轉換而來
var_dump( password_verify( $pass, $hash ) );