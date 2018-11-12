<?php if (!defined('THINK_PATH')) exit();?>
<head>
	<title>杨宁个人博客--文章详情页</title>
	<meta name="author" content="杨宁">
	<meta name="keyword" content="个人博客, 个人网站, 情感文章,技术分享,个人博客模板,php,mysql,java">
	<meta name="description" content="这是杨宁的个人博客,包括情感文章,技术分享,记录生活,留言等">
    <link href="/Public/css/tech.css" rel="stylesheet" type="text/css" />
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


<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 col-md-offset-2 mianbao">
			<img src="/Public/img/home/address.png" alt="面包屑导航"><h2>意见反馈<b class="m_erji"></b></h2>
			<span>&nbsp;&nbsp;希望小伙伴们多多给我提建议意见哦！&nbsp;&nbsp; —— Mr.Yang</span>
		</div>
	</div>
	<style type="text/css">
		/*意见反馈*/
		.opinion{height: 50px;border-bottom: 2px solid #E6E6E6;line-height: 70px;padding-left: 15px}
	</style>
   <div class="row">
   		<article class="col-md-5 col-md-offset-2">
   			<div class="com-md-12 opinion">
   				给我提意见和建议的小伙伴可以在下面留言哦 !
   			</div>
   			<!-- 评论 -->
   			<div id="SOHUCS"></div> 
			<script type="text/javascript"> 
			(function(){ 
			var appid = 'cytoOc55m'; 
			var conf = '79df39193bc2d05e79135e9c59dfe798'; 
			var width = window.innerWidth || document.documentElement.clientWidth; 
			if (width < 960) { 
			window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); 
			</script>
   			<!-- 评论结束 -->
   		</article>
    	<div class="col-md-3">
    		<h2 class="col-md-11 attention" >
					当前时间
			</h2>
			<div class="col-md-12" style="position: static;padding-top:0px;border:1px solid #FFCC00;border-radius: 7px;width:70%;padding:0px;height:80px;margin-left:16px">	
				<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="310" height="75" style="background-color: #fffbf0;">
				    <param name="movie" value="/Public/img/flash2261.swf">
				    <param name="IsAutoPlay" value="1" />
				    <param name="quality" value="high">
				    <embed src="/Public/img/flash2261.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="310" height="75" autoplay="true" >
				    </embed>
			  	</object>
			</div>
			<h2 class="col-md-11 attention" >
					<span style="color:#349A18">热评文章</span>
			</h2>
			<div class="col-md-11" style="min-height:10px; max-height:322px;margin-top:10px;overflow: hidden;">
				<ul class="hot_list">
					<li>
						<a href=""><img width="80" height="80" alt="" class="pic"  src="/Public/img/home/3.jpg" /></a>
						<span class="text">【写给我最美好的年华】这么戳人光是这个班要毕业了... <br/><a href="">阅读全文&raquo;</a></span>
						<div class="from">
							<span class="f_r"><img src="/Public/img/home/eyes.png" alt="浏览量" style="width:20px;height:18px"></i><span  style="color:#999">浏览( 70 )</span></span>
							<span class="f_r"><a href=""><img src="/Public/img/home/pinglun.png" alt="评论" style="width:17px;height:17px"><span>评论( 100 )</span></a></span>
						</div>
					</li>
					<li>
						<a href=""><img width="80" height="80" alt="" class="pic"  src="/Public/img/home/1.jpg" /></a>
						<span class="text">【写给我最美好的年华】这么戳人光是这个班要毕业了... <br/><a href="">阅读全文&raquo;</a></span>
						<div class="from">
							<span class="f_r"><img src="/Public/img/home/eyes.png" alt="浏览量" style="width:20px;height:18px"></i><span  style="color:#999">浏览( 70 )</span></span>
							<span class="f_r"><a href=""><img src="/Public/img/home/pinglun.png" alt="评论" style="width:17px;height:17px"><span>评论( 100 )</span></a></span>
						</div>
					</li>
					<li>
						<a href=""><img width="80" height="80" alt="" class="pic"  src="/Public/img/home/2.jpg" /></a>
						<span class="text">【写给我最美好的年华】这么戳人光是这个班要毕业了... <br/><a href="">阅读全文&raquo;</a></span>
						<div class="from">
							<span class="f_r"><img src="/Public/img/home/eyes.png" alt="浏览量" style="width:20px;height:18px"></i><span  style="color:#999">浏览( 70 )</span></span>
							<span class="f_r"><a href=""><img src="/Public/img/home/pinglun.png" alt="评论" style="width:17px;height:17px"><span>评论( 100 )</span></a></span>
						</div>
					</li>
					<li>
						<a href=""><img width="80" height="80" alt="" class="pic"  src="/Public/img/home/4.jpg" /></a>
						<span class="text">【写给我最美好的年华】这么戳人光是这个班要毕业了... <br/><a href="">阅读全文&raquo;</a></span>
						<div class="from">
							<span class="f_r"><img src="/Public/img/home/eyes.png" alt="浏览量" style="width:20px;height:18px"></i><span  style="color:#999">浏览( 70 )</span></span>
							<span class="f_r"><a href=""><img src="/Public/img/home/pinglun.png" alt="评论" style="width:17px;height:17px"><span>评论( 100 )</span></a></span>
						</div>
					</li>
					<li>
						<a href=""><img width="80" height="80" alt="" class="pic"  src="/Public/img/home/5.jpg" /></a>
						<span class="text">【写给我最美好的年华】这么戳人光是这个班要毕业了... <br/><a href="">阅读全文&raquo;</a></span>
						<div class="from">
							<span class="f_r"><img src="/Public/img/home/eyes.png" alt="浏览量" style="width:20px;height:18px"></i><span  style="color:#999">浏览( 70 )</span></span>
							<span class="f_r"><a href=""><img src="/Public/img/home/pinglun.png" alt="评论" style="width:17px;height:17px"><span>评论( 100 )</span></a></span>
						</div>
					</li>		
				</ul>
			</div>
			<h2 class="col-md-11 attention" >
					友情链接
			</h2>
			<div class="col-md-11 youlian">
				<ol class="you_ol"> 
					<li><a href="">车助网</a></li>
					<li><a href="">联创商城</a></li>
					<li><a href="">百度知道</a></li>
					<li><a href="">新浪微博</a></li>
					<li><a href="">小青博客</a></li>
					<li><a href="">创智博客</a></li>
					<li><a href="">兄弟连</a></li>
				</ol>
			</div>
    	</div>      
   </div>
</div>

<script type="text/javascript">
// 热评文章滚动显示
$(function(){        
	setInterval(function(){
		$('.hot_list li:last').hide().insertBefore($(".hot_list li:first")).slideDown(1000);
	}, 4000);
});
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