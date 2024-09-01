<?php
// 包含数据库配置文件
$servername = "rm-wz92814fppe3065l1oo.mysql.rds.aliyuncs.com";
$username = "root";
$password = "RootAmy!@";
$dbname = "aishide";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
$sql = "select * from products";
$result= $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row
    }
}else{
        echo "no fuction"; 

    }
    

?>