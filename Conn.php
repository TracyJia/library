<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
$conn=null;
    define("HOST","localhost");//主机名
	define("NAME","root");//用户名
	define("PASS","");//密码
	define("DBNAME","my_library");//数据库名
    $conn = mysqli_connect(HOST,NAME,PASS,DBNAME) or die(mysqli_connect_error());     //连接数据库
?>



