<?php header("Content-Type: text/html; charset=utf-8") ?>
<center>
<title>图书信息管理系统</title>
<h1>添加图书信息</h1>
<hr/>
<form action="books_do_add.php" method="post">
    <p>书名：<input type="text" name="bname" value="<?php if(isset($_POST['bname'])) echo $_POST['bname']; ?>"></p>
    <p>类型：<input type="text" name="btype" value="<?php if(isset($_POST['btype'])) echo $_POST['btype']; ?>"></p>
    <p>数量：<input type="text" name="bcount" value="<?php if(isset($_POST['bcount'])) echo $_POST['bcount']; ?>"></p>
    <p><input type="hidden" name="bid" value="<?php if(isset($_POST['bid'])) echo $_POST['bid']; ?>"></p>
    <p><input type="submit" name="submit" value="保存"><input name="Submit2" type="button" class="btn_grey" value="返回" onclick="history.back();"></p>
</form>
</center>