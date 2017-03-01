<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

	if(@$un=$_POST['uname'])
		$query = "select * from tb_users where name='$un'";
	if(@$us=$_POST['usex'])
		$query = "select * from tb_users where sax='$us'"; 
	if(@$uc=$_POST['uclass'])
		$query = "select * from tb_users where class='$uc'";
	@$result = mysqli_query($conn,$query);
	if(!$result)
		echo "搜索内容不存在！";
}
?>
<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>搜索用户</h1>
		<hr/>
		<a href='index.php'>返回首页</a>&nbsp;&nbsp;&nbsp;
		<a href='manager.php'>返回管理员中心</a>
		<form action="users_query.php" method="post">
		<table>
			<tr><td>按用户名查找：</td><td><input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"></td><td><input type="submit" name="submit" value="搜索"></td></tr>
		</table>
		</form>
		<form action="users_query.php" method="post">
		<table>
			<tr><td>按性别查找：</td><td><input type="text" name="usex" value="<?php if(isset($_POST['usex'])) echo $_POST['usex']; ?>"></td><td><input type="submit" name="submit" value="搜索"></td></tr>
		</table>
		</form>
		<form action="users_query.php" method="post">
		<table>
			<tr><td>按班级查找：</td><td><input type="text" name="uclass" value="<?php if(isset($_POST['uclass'])) echo $_POST['uclass']; ?>"></td><td><input type="submit" name="submit" value="搜索"></td></tr>
		</table>
		</form>
		
		<table border="1" width="1000">
			<tr><td>id</td><td>用户名</td><td>性别</td><td>年龄</td><td>班级</td><td>已借图书</td><td>借书用途</td><td>借书时间</td><td align="center">操作</td></tr>
			<?php 
			while(@$row = mysqli_fetch_assoc($result)){
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
						<a href='users_do_update.php?id=".$row['id']."'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='users_delete.php?id=".$row['id']."'>删除</a>";
				echo "</tr>";
			}
			?>
		</table>
	</center>

</html>