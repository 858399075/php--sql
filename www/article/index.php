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
	.zuozhe{
		margin-right: 50%;
		width: 100%;
		text-align: right;
	}
</style>
</head>

<body>
<div class="container">
	<!-- 左边导航栏 -->
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="./index.php"><h3>首页</h3></a></li>
      <li><a href="./stuindex.php">学生管理</a></li>
	  <li><a href="./teaindex.php">教师管理</a></li>
      <li><a href="./index.php">课程管理</a></li>
	  <li><a href="./index.php">校园新闻动态</a></li>
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
		<h1 style="text-align: center;">教务管理系统-首页</h1>
		<div style="margin-top: 30px;">
			<h6 align=center>云南种业创新研究院成立暨种业创新成果发布会在校举行</h6>
		</div>
		<p>本站消息 2022年5月21日下午，云南种业创新研究院成立暨种业创新成果发布会在学校校友会堂举行。“时代楷模”、中国工程院院士、学校名誉校长朱有勇院士，省教育厅、省科技厅、省农业农村厅、省乡村振兴局、省林草局、省农科院、省林科院、西南林业大学等有关单位领导，校党委书记黎素梅、校长李永和以及相关企业负责人出席会议，学校其他校领导及部分师生代表参加会议。</p>
		<p>
		会议由副校长李彤主持。李永和在会议致辞中表示，党和政府历来高度重视种业工作，历次中央一号文件都对种子或种业提出了发展要求，2022年提出要“大力推进种源等农业关键核心技术攻关”，种业安全已成为国家整体安全战略的重要组成部分。云南农业大学成立云南种业创新研究院符合国家战略，正当其时，恰逢其势。云南农业大学将持续围绕生物种业“卡脖子”问题，努力将云南种业创新研究院建成一流的高原种业研究和转化应用平台，打造具有重要影响力的区域种业科技创新高地，更好服务国家和云南种业科技自主创新。
		</p>
		<p>
		校党委副书记雷建奕宣读了云南种业创新研究院成立及任命文件。李永和向副校长、云南种业创新研究院院长杨生超进行了授牌。
		</p>
		<p>
		朱有勇介绍了几十年来学校在种业创新研究上的艰辛探索和取得的辉煌成绩，他表示，有了好的“种子”，更要在“耕种”上下功夫，要探索更加科学高效的种植方式，真正把论文写在祖国大地上。
		</p>
		<div class="zuozhe">
		<p>作者：廖顺洋</p>
		<p>图片：潘伟荣</p>
		<p>编辑：潘伟荣</p>
		</div>

	</div>
</div>
</body>
</html>