<?php

$pass = '123456';

# 將密碼轉換成雜湊碼
echo password_hash($pass, PASSWORD_DEFAULT);