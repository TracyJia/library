<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

	if(@$bn=$_POST['qname'])
		@$query = "select * from tb_books where name='$bn'";
	if(@$bt=$_POST['qtype'])
		@$query = "select * from tb_books where type='$bt'"; 
	var_dump($query);
	$result = mysqli_query($conn,$query);
}
?>
<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>搜索图书</h1>
		<hr/>
		<a href='index.php'>返回首页</a>&nbsp;&nbsp;&nbsp;
		<a href='manager.php'>返回管理员中心</a>
		<form action="books_query.php" method="post">
		<table>
			<tr><td>按书名查找：</td><td><input type="text" name="qname" value="<?php if(isset($_POST['qname'])) echo $_POST['qname']; ?>"></td><td><input type="submit" name="submit" value="搜索"></td></tr>
		</table>
		</form>
		<form action="books_query.php" method="post">
		<table>
			<tr><td>按类型查找：</td><td><input type="text" name="qtype" value="<?php if(isset($_POST['qtype'])) echo $_POST['qtype']; ?>"></td><td><input type="submit" name="submit" value="搜索"></td></tr>
		</table>
		</form>
		<table border="1" width="300">
			<tr><td>id</td><td>书名</td><td>类型</td><td>数量</td><td align="center">操作</td></tr>
			<?php 
			while(@$row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td>".$row['count']."</td>";
				echo "<td align='center'>
						<a href='books_do_update.php?id=".$row['id']."'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='books_delete.php?id=".$row['id']."'>删除</a>";
				echo "</tr>";
			}
			?>
			
		</table>
	</center>

</html>