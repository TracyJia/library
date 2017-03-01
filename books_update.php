<?php require("Conn.php");
	$query="select * from tb_books where id=".$_GET['id'];
	$result=mysqli_query($conn,$query);
	if($result && mysqli_num_rows($result)>0){
		$book = mysqli_fetch_assoc($result);
	}

	else{
		die("没有找到要修改的数据！");
	}
?>

<center>
<title>图书信息管理系统</title>
<h1>修改图书信息</h1>
<hr/>
<form action="books_do_update.php" method="post">
    <p>书名：<input type="text" name="bname" value="<?php echo $book['name']; ?>"></p>
    <p>类型：<input type="text" name="btype" value="<?php echo $book['type']; ?>"></p>
    <p>数量：<input type="text" name="bcount" value="<?php echo $book['count']; ?>"></p>
    <p><input type="hidden" name="bid" value="<?php echo $book['id']; ?>"></p>
    <p><input type="submit" name="submit" value="保存"><input name="Submit2" type="button" class="btn_grey" value="返回" onclick="history.back();"></p>
</form>
</center>