<?php include_once './public/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>教务系统-登录</title>
<link rel="stylesheet" href="./public/css/bootstrap.css">
<link rel="stylesheet" href="./public/css/public.css">
<style>
    body{
        background-color: rgba(255, 192, 203, 0.558);
    }
    .table td{
        border-top:0px solid coral ;
    }
</style>
</head>
<body>
    <div class="center mycenter">
        <form  name="form1" action="auth.php" method="GET">
            <br>
            <h3 align="center">学生登录页面</h3>
        <table class="table">
        <tr>
            <td>账号：</td>
            <td>
                <input type="text" name="name" id="name" />
            </td>
        </tr>
        <tr>
            <td>密码：</td>
            <td>
                <input type="password" name="passwd" id="passwd" />
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="middle">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" name="button" id="button" value="登录" />
            <a href="./operation/stuadd.php">注册</td>
        </tr>
        </table>
    </form>
    </div>
</body>
</html>