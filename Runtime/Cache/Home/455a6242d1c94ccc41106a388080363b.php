<?php if (!defined('THINK_PATH')) exit();?>
<head>
	<title>杨宁个人博客--留言</title>
	<meta name="author" content="杨宁">
	<meta name="keyword" content="个人博客, 个人网站, 情感文章,技术分享,个人博客模板,php,mysql,java">
	<meta name="description" content="这是杨宁的个人博客,包括情感文章,技术分享,记录生活,留言等">
    <link href="/Public/css/message.css" rel="stylesheet" type="text/css" />

</head>
<html lang="en">
	<head>
		<meta http-equiv="content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- 快捷图标 -->
  		<link rel="shortcut icon" href="/Public/img/xin.ico" type="image/x-icon"/>
    	<link href="/Public/css/style.css" rel="stylesheet" type="text/css" >
    	<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    	<link href="/Public/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    	<link href="/Public/css/nav.css" rel="stylesheet" type="text/css" />
    	<link href="/Public/css/index.css" rel="stylesheet" type="text/css" />
        <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <script src="/Public/js/jquery-1.8.3.min.js"></script>	
	</head>
	<body style=" background-color: #fffbf0;">
	<style type="text/css">
	/*天气预报*/
	.cross-text{line-height: 45px}
	</style>
	<section class="hed">
		<div class="topbar">
			<div class="welcome">
				<span>欢迎访问~ <b>杨先森博客!</b></span>
				<iframe allowtransparency="true" frameborder="0" width="180" height="36" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=3&z=2&t=1&v=0&d=1&bd=0&k=000000&f=&ltf=009944&htf=ff0000&q=1&e=0&a=1&c=54511&w=180&h=36&align=left"></iframe>
			</div>
			<ul>
				<li><a href="">登录</a></li>
				<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	               关注本站
	               <i class="fa fa-angle-down" id="down"></i>
	               <i class="fa fa-angle-up" id="up"></i>
	            </a>
	            <div class="guanzhu">
	                <a href=""><div class="erji"><i class="fa fa-wechat"></i>&nbsp;&nbsp;微信</div></a>
	                <a href=""><div class="erji"><i class="fa fa-qq"></i>&nbsp;&nbsp;QQ</div></a>
	                <a href=""><div class="erji"><i class="fa fa-weibo"></i>&nbsp;&nbsp;新浪微博</div></a>
	            </div>
	        	</li>
	        </ul>
		</div>
		<div class="row">
      		<div class="col-md-5 nav_left">
      			<div class="col-md-8 logo">
      				<a href="/Home/Index/index"><img src="/Public/img/home/logo.jpg" alt="LOGO"></a>
      			</div>
      			<div class="col-md-4 logo_text">
      				谁的浮生<br/>乱了谁的流年！
      			</div>
      		</div>
      		<div class="col-md-7">
      			<nav>
      				<a href="/Home/Index/index">首页</a>
      				<a href="/Home/Love/index">情感故事</a> 
					<a href="/Home/Technique/index">技术分享</a>
					<a href="/Home/Now/index">此时此刻</a>
					<a href="/Home/Aboutme/index">关于我</a>
					<a href="/Home/Message/index">给我留言</a>
					<a href="#" onclick="show()" id="showSearch"><i class="fa fa-search"></i></a>
					<a href="#" onclick="hide()" id="hideSearch"><i class="fa fa-times"></i></a>
      			</nav>	
      		</div> 
      	 </div>
    </section>
    <div class="search" >
    	<div class="container">
    		<div class="row">
    			<form action="" method="get">
    				<input type="text" name="title" placeholder="输入您想查找的关键字">
    				<button type="submit">
    					<i class="fa fa-search"></i>
    				</button>
    			</form>
    		</div>
    	</div>
    </div>
	<script type="text/javascript">
		// 鼠标移上导航变色
		$(function(){
			// 判断页面宽度适配手机
			var width = $(window).width();
			if(width < 420){
				window.location.replace("Index/index2");
			}
			$(".topbar ul li a").mouseover(function(event) {
				$(this).css("color","#FF926F")
			});
			$(".topbar ul li a").mouseout(function(event) {
				$(this).css("color","#999")
			});
		})
		// 显示二级菜单
		$(".dropdown-toggle").on("mouseenter", function() {
                $('.guanzhu').show();
                $('#up').show();
                $('#down').hide();
            })
		
		$(".guanzhu").mousemove(function(event) {
			$(this).show();
			$('#up').show();
            $('#down').hide();
            $('.dropdown-toggle').css("color","#FF926F");
		});
		$(".guanzhu").mouseout(function(event) {
			$(this).hide();
			$('#up').hide();
            $('#down').show();
            $('.dropdown-toggle').css("color","#999");
		});
		// 子菜单颜色改变
		$(".erji").each(function() {
			 $(this).mousemove(function(event) {
			 	$(this).css("color","#FF926F");
			 });
			 $(this).mouseout(function(event) {
			 	$(this).css("color","#999");	
			 });
		});
		// 点击弹出搜索框
		function show(){
			$(".search").slideDown() ;
			$("#showSearch").hide();
			$("#hideSearch").show();
			$("#hideSearch").css("color","#FF926F")
		}
		function hide(){
			$(".search").slideUp();
			$("#showSearch").show();
			$("#hideSearch").hide();
			$("#showSearch").css("color","#666")

		}
	</script>


	<div id="wrap">
		<h3 style="text-align:center;margin-bottom:20px">发送一封消息给我</h3>
		<div id='form_wrap'>
			<form>
				<p>Hello Mr.Yang,</p>
				<label for="email">消息内容 : </label>
				<textarea  name="message" value="Your Message" id="message" ></textarea>
				<p>关于你,</p>	
				<label for="name">Name: </label>
				<input type="text" name="name" value="" id="name" />
				<label for="email">Email: </label>
				<input type="text" name="email" value="" id="email" />
				<input type="submit" name ="submit" value="发送 !" />
			</form>
		</div>
	</div>
<script type="text/javascript">

</script>
 <script src="/Public/js/jquery-1.8.3.min.js"></script>
 <script src="/Public/js/bootstrap.min.js"></script>
<div id="gotop" style="display:none">
	<a href="#top"><img src="/Public/img/home/top.png" alt=" 回到顶部"></a>
</div>
<footer>
	<p>Copyright © 蜀ICP备17043632号-1</p>
	<p>www.yangxianshen.com 联系我QQ：516508422</p>
	<!-- 站长统计 -->
	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1271910051'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1271910051%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</footer>
<style type="text/css">
	#gotop{width: 48px;height:48px; float: right;position: fixed;right: 100px;bottom: 15px;}
	#gotop img{width: 100%;height: 100%}
	footer{text-align: center;height: 50px;margin-top: 30px;font-size: 12px;color: #737373;}
	p{margin-bottom: 5px}
	#cnzz_stat_icon_1271910051{position: relative;top:-45px;left: 130px}
</style>
</body>
<script type="text/javascript">
window.onscroll = function () {
    if (document.documentElement.scrollTop + document.body.scrollTop > 300) {
        document.getElementById("gotop").style.display = "block";
    }
    else {
        document.getElementById("gotop").style.display = "none";
    }
}
</script>
</html>