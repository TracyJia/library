<?php session_start(); ?>
<?php header("Content-Type: text/html; charset=utf-8") ?>
<html>
	<title>图书信息管理系统</title>
	<center>
		<h1>welcome</h1>
		<hr/>
		<form action="users_do_login.php" method="post">
			<p>
				<h3>用户登录</h3>
				<table>
					<tr>
						<td>用户名：</td>
						<td><input type="text" name="username"  value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"></td>
					</tr>
					<tr>
						<td>密码：</td>
						<td><input type="password" name="password"  value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></td>
							<input type="hidden" name="id" value="">
					</tr>
					<tr>
						<td><input type="submit" value="确认"></td>
						<td><input type="reset" value="重置"></td>
					</tr>
				</table>
			</p>
		</form>
		<p><h3><a href="users_reg.php">新用户注册</a></h3></p>
		<form action="manager_login.php" method="post">
			<p>
				<h3>管理员登录</h3>
				<table>
					<tr>
						<td>用户名：</td>
						<td><input type="text" name="managername"></td>
					</tr>
					<tr>
						<td>密码：</td>
						<td><input type="password" name="mpassword"></td>
					</tr>
					<tr>
						<td><input type="submit" value="确认"></td>
						<td><input type="reset" value="重置"></td>
					</tr>
				</table>
			</p>
		</form>
	</center>
</html>