<?php if (!defined('THINK_PATH')) exit();?>
	<head>
		<title>杨宁个人博客--首页</title>
    	<meta name="author" content="杨宁">
    	<meta charset="UTF-8" />
    	<meta name="keyword" content="个人博客, 个人网站, 情感文章,技术分享,个人博客模板,php,mysql,java">
    	<meta name="description" content="这是杨宁的个人博客,包括情感文章,技术分享,记录生活,留言等">
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


		<!-- 轮播图 star -->
		<div class="row lunbo">
			<div class="col-md-5 lunboImg" style="padding:0px">
				<div id="myCarousel" class="carousel slide">
			    	<!-- 轮播（Carousel）指标 -->
				    <ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>   
				    <!-- 轮播（Carousel）项目 -->
				    <div class="carousel-inner">
				        <div class="item active">
				            <img src="/Public/img/home/banner1.png" alt="First slide">
				        </div>
				        <div class="item">
				            <a href="/Home/Love/index" target="_blank"><img src="/Public/img/home/banner2.png" alt="Second slide"></a>
				        </div>
				        <div class="item">
				            <a href="/Home/Technique/index" target="_blank"><img src="/Public/img/home/banner3.png" alt="Third slide"></a>
				        </div>
				    </div>
				    <!-- 轮播（Carousel）导航 -->
				    <a class="carousel-control left" href="#myCarousel" 
				        data-slide="prev" style="background:none;">&lsaquo;
				    </a>
				    <a class="carousel-control right" href="#myCarousel" 
				        data-slide="next" style="background:none;">&rsaquo;
				    </a>
				</div>
			</div>
			<div class="col-md-3" >
				<div class="col-md-10 yangxianshen" >
					<strong>杨先森博客</strong>
					<h2>一位伪文艺屌丝程序员的原创博客网站</h2>
					<p>潇洒乃我本性,帅乃天生注定。</p>
					<p>IT 界最不着调的程序员</p>
					<p>双鱼男，有点感性，只希望通过博客，分享心情，结交朋友！互相学习，共同进步！</p>
					<span> ---- 2017 Mr.Yang</span>
				</div>
			</div>
		</div>
		<!-- 轮播图end -->
		<!-- 文章推荐 -->
		<div class="row">
			<h2 class="col-md-5 recommend">
				<img src="/Public/img/home/tuijian.png" alt="" style="width:25px;height:25px"><span>推荐</span>文章
			</h2>
			<div class="col-md-3">
				<h2 class="col-md-10 attention">
					关注我
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 recommendImg " >
				<?php if(is_array($list)): foreach($list as $key=>$row): ?><a href="">
						<div class="col-md-3 re_img">
							<?php if($row["type"] == 1): ?><div class="jiaobiao"></div>
								<p class="jiaobiao2">情感故事</p><?php endif; ?>
							<?php if($row["type"] == 2): ?><div class="jiaobiao4"></div>
								<p class="jiaobiao3">技术分享</p><?php endif; ?>
							<img src="/Public/Uploads/admin/<?php echo ($row["images"]); ?>" alt="文章推荐图片"title="<?php echo ($row["title"]); ?>">
							<div class="re_text">
								<?php echo ($row["title"]); ?>
							</div>
						</div>
					</a><?php endforeach; endif; ?>
			</div>
			<div class="col-md-3 att_img ">
				<ul>
					<li><a href="https://weibo.com/u/6412848487?is_all=1" target="_blank" class="xinlang"><img src="/Public/img/home/xinlang.png" alt="">新浪微博</a></li>
					<li><a href="" target="_blank" class="weixin"><img src="/Public/img/home/weixin.png" alt="微信关注">微信</a></li>
					<li><a href="http://wpa.qq.com/msgrd?v=3&uin=981742968&site=qq&menu=yes" target="_blank" class="qq"><img src="/Public/img/home/QQ.png" title="QQ联系我">Q Q</a></li>
					<li><a href="/Home/Opinion/index" target="_blank" class="at_img"><img src="/Public/img/home/yijian.png" >意见反馈</a></li>
				</ul>
				<div class="weixin_g">
					<img src="/Public/img/home/weixin_g.jpg" alt="微信关注">
				</div>
			</div>
			<aside class="col-md-3" style="position: relative;">
				<h2 class="col-md-10 attention" style="margin-top:20px" >
					点击排行
				</h2>
				<div class="col-md-3 paihang">	
					<ul>
					<?php if(is_array($num)): foreach($num as $key=>$vo): ?><li class="p_li"><span class="paiNum">1</span>
						<?php if($vo["type"] == 1): ?><a href="/Home/Love/detail"><?php echo (mb_strcut($vo["title"],0,50,utf8)); ?> ...</a><span class="readCount"><?php echo ($vo["readCount"]); ?></span><?php endif; ?>
						<?php if($vo["type"] == 2): ?><a href="/Home/Technique/detail"><?php echo (mb_strcut($vo["title"],0,50,utf8)); ?> ...</a><span class="readCount"><?php echo ($vo["readCount"]); ?></span><?php endif; ?>	
						</li><?php endforeach; endif; ?>
					</ul>
					<h2 class="col-md-11 attention" >
						友情链接
					</h2>
					<div class="col-md-3 youlian">
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
			</aside>
		</div>
		<!-- 最新文章 -->
		<div class="row">
			<h2 class="col-md-5 zuixin">
				<img src="/Public/img/home/zuixin.png" alt="" style="width:22px;height:22px"><span>最新</span>文章
			</h2>
			<?php if(is_array($news)): foreach($news as $key=>$ne): ?><article class="col-md-5 newArticle">
					<?php if($ne["type"] == 1): ?><figure>
							<a href="/Home/Love/detail" title="<?php echo ($ne["title"]); ?>" target="_blank">
								<img src="/Public/Uploads/admin/<?php echo ($ne["images"]); ?>" alt="文章图片" title="<?php echo ($ne["title"]); ?>">
							</a>
						</figure><?php endif; ?>
					<?php if($ne["type"] == 2): ?><figure>
							<a href="/Home/Technique/detail" title="<?php echo ($ne["title"]); ?>" target="_blank">
								<img src="/Public/Uploads/admin/<?php echo ($ne["images"]); ?>" alt="文章图片" title="<?php echo ($ne["title"]); ?>">
							</a>
						</figure><?php endif; ?>
					<ul>
						<?php if($ne["type"] == 1): ?><h3><a href="/Home/Love/detail" target="_blank"><?php echo ($ne["title"]); ?></a></h3><?php endif; ?>
						<?php if($ne["type"] == 2): ?><h3><a href="/Home/Technique/detail" target="_blank"><?php echo ($ne["title"]); ?></a></h3><?php endif; ?>
						<?php echo (mb_strcut($ne["content"],0,270,utf8)); ?>...
						<?php if($ne["type"] == 1): ?><a href="/Home/Love/detail" target="_blank" class="xiangqin">[详情]</a><?php endif; ?>
						<?php if($ne["type"] == 2): ?><a href="/Home/Technique/detail" target="_blank" class="xiangqin">[详情]</a><?php endif; ?>
						<p class="autor">
						<?php if($ne["type"] == 1): ?><span ><img src="/Public/img/home/tar.png" alt="文章分类" style="width:20px;height:20px"><a href="/Home/Love/detail" target="_blank" style="color: #759b08;margin-left:5px;font-size:12px">情感故事</a></span><?php endif; ?>
						<?php if($ne["type"] == 2): ?><span ><img src="/Public/img/home/tar2.png" alt="文章分类" style="width:18px;height:18px"><a href="/Home/Technique/detail" target="_blank" style="color: #9AB9F7;margin-left:5px;font-size:12px">技术分享</a></span><?php endif; ?>
							<span class="time" style="padding-left:20px"><img src="/Public/img/home/time.png" alt="发表时间" style="width:16px;height:16px"><span style="margin-left:5px;font-size:12px;"><?php echo (date("Y-m-d H:i:s",$ne["curentTime"])); ?></span></span>
						<?php if($ne["type"] == 1): ?><span class="f_r" style="margin-right:30px"><a href="/Home/Love/detail" ><i class="fa fa-thumbs-up"></i></a><span><?php echo ($ne["up"]); ?></span></span><?php endif; ?>
						<?php if($ne["type"] == 2): ?><span class="f_r" style="margin-right:30px"><a href="/Home/Technique/detail" ><i class="fa fa-thumbs-up"></i></a><span><?php echo ($ne["up"]); ?></span></span><?php endif; ?>
							<span class="f_r"><img src="/Public/img/home/eyes.png" alt="浏览量" style="width:20px;height:18px"></i><span>浏览( <?php echo ($ne["readCount"]); ?> )</span></span>
							<span class="f_r"><a href=""><img src="/Public/img/home/pinglun.png" alt="评论" style="width:17px;height:17px"><span>评论( <?php echo ($ne["comment"]); ?> )</span></a></span>
						</p>
					</ul>
				</article><?php endforeach; endif; ?>
		</div>
		<script type="text/javascript">
		$(function(){
			// 推荐文章 文字变色
			$(".re_text").mouseover(function(event) {
				$(this).css("color","#FF926F")
			});
			$(".re_text").mouseout(function(event) {
				$(this).css("color","#777")
			});
			// 在页面加载时就开始动画播放
			$('.carousel').carousel()
			// 角标显示
			$(".re_img").mouseover(function(event) {
				$(this).find(".jiaobiao2").show();
				$(this).find(".jiaobiao").show();
				$(this).find(".jiaobiao3").show();
				$(this).find(".jiaobiao4").show();

			});
			// 角标隐藏
			$(".re_img").mouseout(function(event) {
				$(this).find(".jiaobiao2").hide();
				$(this).find(".jiaobiao").hide();
				$(this).find(".jiaobiao3").hide();
				$(this).find(".jiaobiao4").hide();

			});
			// 鼠标移到文章列表改变背景色
			$(".newArticle").each(function() {
				$(this).mousemove(function(event) {
					$(this).css("background-color","#fff")
				});
			});
			$(".newArticle").mouseout(function(event) {
				$(this).css("background-color","#fffbf0")
			});
			// 改变文章排行数字的颜色
			 $(".paihang ul li:eq(0)").find('.paiNum').css("background-color","#FE5086");
			 $(".paihang ul li:eq(1)").find('.paiNum').css("background-color","#F69523")
			 $(".paihang ul li:eq(2)").find('.paiNum').css("background-color","#63B6F7")
			 $(".paihang ul li:eq(3)").find('.paiNum').css("background-color","#ADA30A")
			 $(".paihang ul li:eq(4)").find('.paiNum').css("background-color","#A98659")
			 // 排行编码
			  $(".paihang ul li:eq(0)").find('.paiNum').text(1)
			  $(".paihang ul li:eq(1)").find('.paiNum').text(2)
			  $(".paihang ul li:eq(2)").find('.paiNum').text(3)
			  $(".paihang ul li:eq(3)").find('.paiNum').text(4)
			  $(".paihang ul li:eq(4)").find('.paiNum').text(5)
			  $(".paihang ul li:eq(5)").find('.paiNum').text(6)
			  $(".paihang ul li:eq(6)").find('.paiNum').text(7)
			  $(".paihang ul li:eq(7)").find('.paiNum').text(8)
			  $(".paihang ul li:eq(8)").find('.paiNum').text(9)
			  $(".paihang ul li:eq(9)").find('.paiNum').text(10)
			  // 显示微信关注二维码
			  $(".weixin").mousemove(function(event) {
			  		$(".weixin_g").show();
			  });
			  $(".weixin").mouseout(function(event) {
			  		$(".weixin_g").hide();
			  });
		})
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