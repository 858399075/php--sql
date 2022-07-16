<?php
	session_start();
	include_once "../public/conn.php";
?>
<?php
header('Content-type:text/html;charset=utf-8'); //进行utf-8编码，防止出现乱码

var_dump($_POST);
$id = (int)$_POST['id'];
$passwd = $_POST['passwd'];
$sno = (int)$_POST['sno'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = (int)$_POST['age'];
$phone = $_POST['phone'];

var_dump($id);
var_dump($passwd);
var_dump($sno);
var_dump($name);
var_dump($sex);
var_dump($age);
var_dump($phone);

$stuadd="insert into student(id,passwd,sno,name,sex,age,phone) values($id,'$passwd',$sno,'$name','$sex','$age','$phone')";
 //需要执行的sql语句
$result=mysqli_query($conn,$stuadd);
var_dump($result);
if(mysqli_errno($conn)){
    exit(mysqli_error($conn));
}
?>
<?php
	//关闭数据库连接
    header("location:./stuadd.php");
	mysqli_close($conn);
?>