<?php header("Content-Type: text/html; charset=utf-8") ?>
<center>
<title>图书信息管理系统</title>
<h1>添加用户</h1>
<hr/>
<form action="users_do_add.php" method="post">
    <p>姓名：<input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"></p>
    <p>密码：<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></p>
    <p>确认密码：<input type="password" name="repassword" value="<?php if(isset($_POST['repassword'])) echo $_POST['repassword']; ?>"></p>
    <p><input type="hidden" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>"></p>
    <p><input type="submit" name="submit" value="保存"><input name="Submit2" type="button" class="btn_grey" value="返回" onclick="history.back();"></p>
</form>
</center>