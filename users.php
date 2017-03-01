<?php header("Content-Type: text/html; charset=utf-8"); error_reporting(0) ?>
<?php 
//var_dump($_SERVER['REQUEST_METHOD'] == 'POST');
require("Conn.php");
$id = $_SESSION['id'];
$query = "select * from tb_users where name='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
var_dump($_SSESSION['id']);

?>
<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>个人中心</h1>
		<hr/>
		<h3><a href="books_look.php">浏览图书</a>&nbsp;|&nbsp;<a href="books_query.php">搜索图书</a></h3>
		<table border="1" width="600">
			<tr><td>id</td><td>用户名</td><td>性别</td><td>年龄</td><td>班级</td><td>已借图书</td><td>借书用途</td><td>借书时间</td><td align="center">操作</td></tr>
			<?php 
				echo "<tr>";
				echo "<td>".$_SESSION['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['sax']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['class']."</td>";
				echo "<td>".$row['bbname']."</td>";
				echo "<td>".$row['bbuseto']."</td>";
				echo "<td>".$row['bbtime']."</td>";
			?>
		</table>
		<a href="users_update.php">修改资料</a>&nbsp;&nbsp;&nbsp;
		<a href="index.php">返回首页</a>
	</center>
</html>