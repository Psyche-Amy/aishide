<?php
// 数据库配置
$servername = "rm-wz92814fppe3065l1oo.mysql.rds.aliyuncs.com";
$username = "root";
$password = "RootAmy!@";
$dbname = "aishide";

// 创建数据库连接
$link = mysqli_connect($servername, $username, $password, $dbname);

// 检查连接是否成功
if (!$link) {
    die('连接失败: ' . mysqli_connect_error());
}

// 查询所有产品的 ID 和编号
$query = "SELECT id, product_code FROM products";
$result = mysqli_query($link, $query);

// 初始化空数组
$products = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row; // 添加到数组中
    }
}

$demoStr = "josn str1";

// 以JSON格式输出
$json = json_encode($products);
echo $json;
echo $demoStr;

// 关闭数据库连接
mysqli_close($link);
?>