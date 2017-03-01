<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$mn=$_POST['managername'];
		$mpw=$_POST['mpassword'];
		if($mn != "manager" || $mpw != "000")
			echo "用户名或密码错误！";
	}
?>

<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>管理员中心</h1>
		<hr/>
		<h3><a href="books_look.php">浏览图书</a>&nbsp;|&nbsp;<a href="books_query.php">搜索图书</a></h3>
		<h3><a href="users_look.php">浏览用户</a>&nbsp;|&nbsp;<a href="users_query.php">搜索用户</a></h3>
		<p><a href='index.php'>返回首页</a></p>
	</center>
	
</html>