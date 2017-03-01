<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
$query = "select * from tb_users";
$result = mysqli_query($conn,$query);
?>
<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>用户列表</h1>
		<hr/>
		<table border="1" width="1000">
			<tr><td>id</td><td>用户名</td><td>性别</td><td>年龄</td><td>班级</td><td>已借图书</td><td>借书用途</td><td>借书时间</td><td align="center">操作</td></tr>
			<?php 
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['sax']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['class']."</td>";
				echo "<td>".$row['bbname']."</td>";
				echo "<td>".$row['bbuseto']."</td>";
				echo "<td>".$row['bbtime']."</td>";
				echo "<td align='center'>
						<a href='users_update.php?id=".$row['id']."'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='users_delete.php?id=".$row['id']."'>删除</a>";
				echo "</tr>";
			}
			?>
			<a href="users_add.php">添加用户</a>&nbsp;&nbsp;&nbsp;
			<a href='index.php'>返回首页</a>&nbsp;&nbsp;&nbsp;
			<a href='manager.php'>返回管理员中心</a>
		</table>
	</center>

</html>