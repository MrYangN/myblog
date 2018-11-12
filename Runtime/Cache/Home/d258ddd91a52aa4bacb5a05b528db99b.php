<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($webcfg['title']); ?></title>
	<style type="text/css">
	*{
		padding:0px;
		margin:0px;
	}
	body{
		background-color:#0099CC;
	}
	#header{
		min-width:960px;
		height:140px;
		/*border:1px solid red;*/
		background-color: #3c3c3c;
	}
	#header > div:first-of-type{
		width:960px;
		height:100%;
		margin:0 auto;
	}
	#header > div:first-of-type > a{
		line-height: 160px;
		margin-left:40px;
		font-size:68px;
		text-decoration: none;
		color:#fff;
	}
	#contentIndex{
		width:960px;
		height:400px;
		margin:0 auto;
	}
	#contentIndex > div:first-of-type{
		width:600px;
		height:360px;
		margin:0 auto;
		text-align: center;
	}
	#contentIndex > div:first-of-type>span:first-of-type{
		font-size:288px;
		color:#FFF;
	}
	#contentIndex > div:first-of-type>span:last-of-type{
		font-size:38px;
		color:#FFF;
	}
	</style>
</head>
<body>
	<!-- <div id="header">
		<div>
			<a href="">diyo</a>	 
		</div>
	</div> -->
	<div id="contentIndex">
		
		<div><span>404</span><br/><span>网站维护中...</span></div>
		
	</div>
</body>
</html>