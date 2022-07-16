<?php
	session_start();
	include_once "../public/conn.php";
?>
<?php
header('Content-type:text/html;charset=utf-8'); //进行utf-8编码，防止出现乱码

$select="delete  from student where sno={$_POST['sno']}";
$result=mysqli_query($conn,$select);
?>
<?php
	//关闭数据库连接
	header("location:./studelete.php");
	mysqli_close($conn);
?>