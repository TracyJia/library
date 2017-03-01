 <?php header("Content-Type: text/html; charset=utf-8") ?>
<center>
	<h1>注册新用户</h1>
	<hr/>
	<table>
		<form action="users_do_reg.php" method="post">
			<tr><td>姓名：</td><td><input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"></td></tr>
			<tr><td>密码：</td><td><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></td></tr>
			<tr><td>确认密码：</td><td><input type="password" name="repassword" value="<?php if(isset($_POST['repassword'])) echo $_POST['repassword']; ?>"></td></tr>
			<p><input type="hidden" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>"></p>
			<tr><td><input type="submit" name="submit" value="保存"></td><td><input name="Submit2" type="button" class="btn_grey" value="返回" onclick="history.back();"></td></tr>
		</form>
	</table>
</center>