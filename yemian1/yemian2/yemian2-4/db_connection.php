<?php
$host = 'rm-wz92814fppe3065l1oo.mysql.rds.aliyuncs.com';
$dbname = 'aishide';
$username = 'root';
$password = 'RootAmy!@';

$link = mysqli_connect($host, $username, $password, $dbname);

// 检查连接是否成功
if (!$link) {
    die('数据库连接失败: ' . mysqli_connect_error());
}

