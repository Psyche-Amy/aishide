<?php
 $servername = "rm-wz92814fppe3065l1oo.mysql.rds.aliyuncs.com";
 $username = "root";
 $password = "RootAmy!@";
 $dbname = "aishide";

$mysqllink = mysqli_connect($servername,$username,$password,$dbname);
 

// 检查连接
if ($mysqllink->connect_error) {
    die("Connection failed: " . $mysqllink->connect_error);
}
echo "<h2>123</h2>";
 
// 执行查询d
// $sql = "SELECT * FROM products";
// $result = $mysqllink->query($sql);
 
// $users = array();
// if ($result) {
//     while ($row = $result->fetch_assoc()) {
//         $users[] = $row;
//     }
// }
 
// 将结果转换为JSON格式
// echo json_encode($users);
 
$mysqllink->close();
?>