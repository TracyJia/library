<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $bn=$_POST['bname'];
    $bt=$_POST['btype'];
    $bc=$_POST['bcount'];
    $bi=$_POST['bid'];
    require ('Conn.php');
    $q="INSERT INTO tb_books (name,type,count,id)VALUES('$bn','$bt','$bc','$bi')";
    $result=mysqli_query($conn,$q);
	echo "添加成功！<br/>";
	echo "<a href='books_add.php'>返回继续添加</a><br/>";
	echo "<a href='books_look.php'>返回浏览图书</a><br/>";
	echo "<a href='manager.php'>返回管理员中心</a><br/>";
}?>