<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php require("Conn.php");?>

<?php 
//如果收到从 index.php 发送来的消息 
	var_dump($_SERVER['REQUEST_METHOD'] == 'POST');
	$un=$_POST['username'];   //接收 ‘username’ 为 un
	$pw=$_POST['password'];   //接收 ‘password’ 为 pw

	@$query1 = "SELECT * FROM tb_users WHERE name='$un'";  //从数据库中搜索用户名
	@$result1 = mysqli_query($conn,$query1);   //搜索用户名结果
	@$row1=mysqli_fetch_assoc($result1);  //解析搜索用户名得到的结果

	if(!$row1){    //如果从数据库中搜索不到用户名，则输出“用户名输入错误”并提供“返回首页”按钮
		echo "用户名输入错误！";
		echo "<input name='Submit2' type='button' class='btn_grey' value='返回首页' onclick='history.back();'>";;
	}
	
	else{ //如果用户名输入正确
		$password = $row1['password'];  
		if($pw != $password){  //如果所输入密码与数据库中查询得到的密码不同

			echo "密码输入错误！";                      //输出“密码输入错误”并提供“返回首页”按钮
			echo "<input name='Submit2' type='button' class='btn_grey' value='返回首页' onclick='history.back();'>";
		}
		else{  //如果用户名和密码都输入正确
?>
<?php       
			//var_dump($row1);
			//echo "<form action='users.php' method='post'><input type='text' name='id' value='".$row1['id']."'></form>";
			$_SESSION['id']=$row1['id'];
			$_SESSION['name']=$row1['name'];
			$_SESSION['sex']=$row1['sex'];
			$_SESSION['age']=$row1['age'];
			$_SESSION['class']=$row1['class'];
			$_SESSION['bbname']=$row1['bbname'];
			$_SESSION['bbuseto']=$row1['bbuseto'];
			$_SESSION['bbtime']=$row1['bbtime'];

			var_dump($_SESSION);
			//echo "'$un'<br/>";
			echo "登陆成功！";
			echo "<br/><a href='users.php'>进入个人中心</a>";
			echo "<br/><a href='index.php'>返回首页</a>";
		} 
	}
?>