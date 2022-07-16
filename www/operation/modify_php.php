
<?php
	session_start();
	include_once "../public/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align=center>
        
        <?php
        header('Content-type:text/html;charset=utf-8');//进行utf-8编码，防止出现乱码

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

        $updata="update student set id='".$id."',passwd='".$passwd."',sno='".$sno."',name='".$name."',sex='".$sex."',age='".$age."',phone='".$phone."' where sno=".$_POST['sno'];
        //需要执行的sql语句
        $result=mysqli_query($conn,$updata);
        var_dump($result);
        if(mysqli_errno($conn)){
            exit(mysqli_error($conn));
        }
        ?>
        <h2><a  href="../article/stuindex.php">返回学生列表</a></h2>
    </div>
        

<?php
	mysqli_close($conn);
?>
</body>
</html>



