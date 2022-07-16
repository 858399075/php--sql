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
	.stufanye{
		text-align: center;
		margin-top: 30px;
		font-size: 18px;
		top: 30px;
	}
	.stutable{
		/* height: 250px; */
		width: 700px;
		margin-top: 20px;
	}
	.stuoper{
		margin-top: 15px;
	}
</style>
</head>

<body>
<div class="container">
	<!-- 左边导航栏 -->
	<div class="sidebar1">
    	<ul class="nav">
        	<li><a href="./index.php"><h3>首页</h3></a></li>
        	<li><a href="./stuindex.php">学生列表</a></li>
        	<li><a href="../operation/stuadd.php">增加学生</a></li>
	    	<li><a href="../operation/modify.php">修改学生信息</a></li>
        	<li><a href="../operation/studelete.php">删除学生</a></li>
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
	<!-- 左边导航栏完 -->

</div>
<div class="content1">
		<h2 align="center">学生列表</h2>
<div class="stufanye">
<?php
	$tbsql = "select count(*) from student";
	$result = mysqli_query($conn, $tbsql);
	$row = mysqli_fetch_row($result);
	$num = $row[0];
	mysqli_free_result($result);
	$pagesize=10;
	$npage=1;
	$npage=isset($_GET['page'])?$_GET['page']:1;
	$pagenum=new pre_page($npage,$num,$pagesize);	
	$npage=$pagenum->npage();

 	$navi_page=new navigate_page("?",$num,$npage,$pagesize);
	$navi_page->show_page();
	echo "&nbsp;共 $num 个学生<br>";
	$limit=$navi_page->getlimit();
?>
</div>

	<table border=1 align="center" class="stutable">
		<thead>
			<tr>
				<th scope="col" align=center>学号</th>
				<th scope="col" align=center>姓名</th>
				<th scope="col" align=center>性别</th>
				<th scope="col" align=center>年龄</th>
				<th scope="col" align=center>联系方式</th>
			</tr>
		</thead>
		<tbody>
<?php
$tbsql = "select * from student order by sno limit $limit $pagesize";
$query=mysqli_query($conn, $tbsql);
while($row=mysqli_fetch_assoc($query)) {
?>
<tr>
<td align=center><?php echo $row['sno']?></td>
<td align=center><?php echo $row['name']?></td>
<td align=center><?php echo $row['sex']?></td>
<td align=center><?php echo $row['age']?></td>
<td align=center><?php echo $row['phone']?></td>
</tr>
<?php
}
mysqli_free_result($query);
?>
	</tbody>
	</table>

	<div class="stuoper" align=center>
		<a href="../operation/stuadd.php"><button class="btn btn-success">增加学生</button></a>
		<a href="../operation/studelete.php"><button class="btn btn-danger">删除学生</button></a>
		<a href="../operation/modify.php"><button class="btn btn-info">修改学生信息</button></a>
	</div>



<!-- 连接数据库 -->
<?php
	mysqli_close($conn);
?>
</div>
</body>
</html>