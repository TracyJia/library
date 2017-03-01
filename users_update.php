<?php require("Conn.php");
$query="select * from tb_users where id=".$_GET['id'];
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
<h1>修改用户</h1>
<hr/>
<form action="users_do_update.php" method="post">
    <p>姓名：<input type="text" name="uname" value="<?php echo $book['name']; ?>"></p>
	<p>性别：<input type="text" name="usax" value="<?php echo $book['sax']; ?>"></p>
	<p>年龄：<input type="text" name="uage" value="<?php echo $book['age']; ?>"></p>
	<p>班级：<input type="text" name="uclass" value="<?php echo $book['class']; ?>"></p>
	<p>已借图书：<input type="text" name="bbname" value="<?php echo $book['bbname']; ?>"></p>
	<p>借书用途：<input type="text" name="bbuseto" value="<?php echo $book['bbuseto']; ?>"></p>
    <p>密码：<input type="password" name="password" value="<?php echo $book['password']; ?>"></p>
    <p>确认密码：<input type="password" name="repassword" value="<?php echo $book['password']; ?>"></p>
    <p><input type="hidden" name="id" value="<?php echo $book['id']; ?>"></p>
    <p><input type="submit" name="submit" value="保存"><input name="Submit2" type="button" class="btn_grey" value="返回" onclick="history.back();"></p>
</form>
</center>