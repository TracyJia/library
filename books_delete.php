<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
require("Conn.php");
$id = $_GET['id'];
$query = "delete from tb_books where id=".$id;
$result=mysqli_query($conn,$query);
if($result){
	echo "删除成功！</br/>";
	echo "<a href='index.php'>返回首页</a><br/>";
	echo "<a href='manager.php'>返回管理员中心</a></br>";
    echo "<a href='books_look.php'>返回继续浏览</a>";
}
?>

