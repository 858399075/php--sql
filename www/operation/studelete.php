<?php
	session_start();
	include_once "../public/conn.php";
	include_once "../public/pre_page.php";
	include_once "../public/navi_page.php";
	include_once "../public/parse_url.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>教务系统-首页</title>
<link rel="stylesheet" href="../public/css/index.css">
<link rel="stylesheet" href="../public/css/bootstrap.css">
<style>
	.sidebar1 ul li{
        color: black;
        text-align: center;
    }
    .studeletecon{
        margin-top: 150px;
    }
</style>
</head>

<body>
<div class="container">
	<!-- 左边导航栏 -->
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="../article/index.php"><h3>首页</h3></a></li>
      <li><a href="../article/stuindex.php">学生管理</a></li>
	  <li><a href="../article/teaindex.php">教师管理</a></li>
      <li><a href="../index.php">课程管理</a></li>
	  <li><a href="../index.php">校园新闻动态</a></li>
    </ul>

	<div>
		<div class="mytitle">
			<img src="../public/img/头像.jpg" alt="" style = "width: 180px;height: 180px;">
		</div>
		
		<div>
			<ul>
			<h2 style="font-size: 15px;text-align: center;padding-top: 17px;">
            教务管理系统
    		</h2>
		</div>
	</div>
	</div>
  <!-- 右边内容区域 -->
	<div class="content1">
		<h2 style="text-align: center;">删除学生</h2>

        <div class="studeletecon" align=center>
            <form action="./studelete_php.php" method="post">
                    请输入你要删除的学号:
                <input type="text" name="sno" />
                <input type="submit" class="btn btn-danger" value="提交"> <a href="../article/stuindex.php">返回</a>
            </form>
        </div>


	</div>
</div>
</body>
</html>

