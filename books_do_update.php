<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $bn=$_POST['bname'];
    $bt=$_POST['btype'];
    $bc=$_POST['bcount'];
    $bi=$_POST['bid'];
	require("Conn.php");
    $query="update tb_books set name='$bn',type='$bt',count='$bc' where id='$bi'";
	$result=mysqli_query($conn,$query);
	if($result){
	echo "修改成功！";
	echo "<a href='books_look.php'>返回继续浏览</a>";
	}
	else{
	echo "修改失败！";
    echo "<a href='books_look.php'>返回</a>";
	}
}
?>