<?php
// 数据库配置
$servername = "rm-wz92814fppe3065l1oo.mysql.rds.aliyuncs.com";
$username = "root";
$password = "RootAmy!@";
$dbname = "aishide";

// 创建数据库连接
$link = mysqli_connect($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($link) {
    $product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($product_id > 0) {
        $query = "SELECT product_name,fangweima FROM products WHERE id = $product_id";
        $result = mysqli_query($link, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $product = mysqli_fetch_assoc($result);
            ?>

     
            <div class="label">产品名：</div>
            <div class="value" id="proName"><?php echo htmlspecialchars($product['product_name']); ?></div>
            
            </div>
            <div class="van-row">
                <div class="van-col">
                    <div class="label">防伪码</div>
                    <div class="value"><?php echo htmlspecialchars($product['fangweima']); ?></div>
                </div>
            </div>
           

            <?php
        } else {
            echo "<p>未找到对应的产品信息</p>";
        }

        mysqli_free_result($result);
    } else {
        echo "<p>无效的产品ID</p>";
    }
} else {
    echo "连接失败";
}



// 关闭数据库连接
mysqli_close($link);
