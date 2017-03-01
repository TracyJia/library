<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$mn=$_POST['managername'];
	$mpw=$_POST['mpassword'];
	if($mn != "manager" || $mpw != "000"){
		echo "用户名或密码错误！<br/>";
		echo "<a href='index.php'>返回首页</a>";
	}
	else{
		echo "登陆成功！<br/>";
		echo "<a href='manager.php'>进入管理员中心</a><br/>";
		echo "<a href='index.php'>返回首页</a>";
	}
}
?>