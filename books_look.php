<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
$query = "select * from tb_books";
$result = mysqli_query($conn,$query);
?>
<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>图书列表</h1>
		<hr/>
		<table border="1" width="700">
			<tr><td>id</td><td>书名</td><td>类型</td><td>数量</td><td align="center">操作</td></tr>
			<?php 
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td>".$row['count']."</td>";
				echo "<td align='center'>
						<a href='books_update.php?id=".$row['id']."'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='books_delete.php?id=".$row['id']."'>删除</a>";
				echo "</tr>";
			}
			?>
			<a href="books_add.php">添加图书</a>&nbsp;&nbsp;&nbsp;
			<a href='index.php'>返回首页</a>&nbsp;&nbsp;&nbsp;
			<a href='manager.php'>返回管理员中心</a>
		</table>
	</center>

</html>