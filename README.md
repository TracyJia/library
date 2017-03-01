# library

1.需求：<br>
	前台：
		1.用户注册/登陆
		2.查看图书分类
		3.借书（借书时要填写基本信息：借书用途/时间；借走书需要减少数量）
		4.个人中心：管理个人资料/修改密码
	后台：
		1.用户管理（增删改查）
		2.图书分类管理（增删改查）
		3.图书管理（增删改查）
		4.借阅记录查看


2.数据库设计：db_my_library
	1.用户：
		表名：tb_users
		字段：	id(int,not null,auto_increment,primary key)
			name(varchar(30),nut null)
			password(varchar(30),nut null)
			sax(tinyint(1),not null)
			age(int(3),not null)
			class(varchar(30),not null)
			bbname(varchar(40),not null)
			bbuseto(varchar(100),not null)
			bbtime(datetime,not null)
	2.图书：
		表名：tb_books
		字段：	id(int,not null,auto_increment,primery key)
			name(varchar(40),not null)
			type(varchar(30),nut null)
			count(int(10),not null)


3.项目结构：
	|
	|--index.php	 
	|      |
	       |--users_do_login.php
	       |             |
	       |             |--users.php
	       |             |
               |
	       |--users_reg.php
	       |
               |
	       |--manager_login.php
	       |           |
	                   |--books_look.php
			   |         |
			   |         |--books_add.php
			   |         |
			   |         |--books_update.php 
			   |         |
			   |         |--books_delete.php
			   |         |
			   |
			   |
			   |
			   |--books_query.php
			   |
			   |--users_look.php
			   |         |
			   |         |--users_add.php
			   |         |
			   |         |--users_update.php 
			   |         |
			   |         |--users_delete.php
			   |         |
			   |
			   |--users_query.php
                           |


4.修改记录：
  
  （1）5/3-5/4：
      重新整理了项目结构；
      修复了网页跳转逻辑混乱的问题；
      修复了搜索报错的问题；
  （2）5/4：
      users.php无法查看个人资料的问题修改失败：users.php接收不到来自users_do_login.php的消息；
