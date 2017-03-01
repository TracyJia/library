<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $un=$_POST['uname'];
    $pw=$_POST['password'];
    $rpw=$_POST['repassword'];
	$id=$_POST['id'];
    require ('Conn.php');
    $q="INSERT INTO tb_users (name,password)VALUES('$un','$pw')";
	$result=mysqli_query($conn,$q);
	echo "添加成功！<br/>";
	echo "<a href='users_add.php'>返回继续添加</a><br/>";
	echo "<a href='users_look.php'>返回浏览用户</a><br/>";
	echo "<a href='manager.php'>返回管理员中心</a><br/>";
}?>