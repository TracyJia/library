<?php header("Content-Type: text/html; charset=utf-8") error_reporting(0)?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $un=$_POST['uname'];
    $pw=$_POST['password'];
    $rpw=$_POST['repassword'];
	$id=$_POST['id'];
    require ('Conn.php');
	$qname="SELECT name FROM tb_users WHERE name='$un'";
	$r1=mysqli_query($conn,$qname);
	$info=mysqli_fetch_assoc($r1);
		if($info){
		echo "用户名已存在！";
		echo "<br/><a href='index.php'>返回首页</a>";
		echo "<br/><a href='users_reg.php'>返回重新输入</a>";
	}
	else{
		$q="INSERT INTO tb_users (name,password)VALUES('$un','$pw')";
		$result=mysqli_query($conn,$q);
		echo "注册成功！";
		echo "<br/><a href='index.php'>返回首页</a>";
		echo "<br/><a href='users.php'>进入个人中心</a>";
	}
}
?>