<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
    include_once "./public/conn.php";
	$name=$_GET["name"];
	$passwd=$_GET["passwd"];
	// echo $username." ".$password."<br>";
    //防止SQL注入的过滤字符串
	$name = htmlspecialchars($name);
	$passwd = htmlspecialchars($passwd);
	$name = escapeshellcmd($name);
	$passwd = escapeshellcmd($passwd);
    // echo $username." ".$password."<br>";
	
	if(!($name==null)&&!($passwd==null)){//用户名和密码都不为空
		$check="select * from student where id='".$name."'";
		if($result=mysqli_query($conn,$check)){
		    $row=mysqli_fetch_array($result);
			// print_r($row);
		    if($passwd==$row['passwd']){
			    echo $_SESSION['name']."登录成功!";
			    Header("Location: ./article/index.php");
		    }
		}
	}
    echo "登录失败！";
?>
</body></html>