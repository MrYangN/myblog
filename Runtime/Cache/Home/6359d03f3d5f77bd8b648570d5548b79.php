<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
	<head>
		<meta http-equiv="content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link href="/Public/css/style.css" rel="stylesheet" type="text/css" >
    	<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    	<link href="/Public/css/nav.css" rel="stylesheet" type="text/css" />
    	<link href="/Public/css/index.css" rel="stylesheet" type="text/css" />
        <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <script src="/Public/js/jquery-1.8.3.min.js"></script>
        <script src="/Public/js/wySilder.min.js"></script>
	</head>
	<body style=" background-color: #f6f6f6">
		<!-- 导航开始 -->
		<div class="top">
			<div class="nav">
				<span class="nav_btn left">
			        <img src="/Public/img/home/daohang2.png" alt="nav" />
			    </span>
			    <span class="logo_m">
			        <img src="/Public/img/home/MrYang.jpg" alt="LOGO">
			    </span>
			    <span class="sousuo">
			    	<a href="#" onclick="show()" id="showSearch"><i class="fa fa-search"></i></a>
					<a href="#" onclick="hide()" id="hideSearch"><i class="fa fa-times"></i></a>
			    </span>
			</div>
			<div class="bgDiv"></div>
			<div class="leftNav">
			    <a href=""><span class="menu">首页</span></a>
			    <a href="/Home/Love/lindex"><span class="menu">情感故事</span></a>
			    <a href="/Home/Technique/tindex"><span class="menu">技术分享</span></a>
			    <a href=""><span class="menu">此时此刻</span></a>
			    <a href=""><span class="menu">关于我</span></a>
			    <a href=""><span class="menu">给我留言</span></a>
			</div>
		</div>
		<!-- 搜索框开始 -->
		<div class="search_m" >
	    	<form action="" method="get">
				<input type="text" name="title" placeholder="输入您想查找的关键字">
				<button type="submit">
					<i class="fa fa-search"></i>
				</button>
    		</form>
    	</div>
    	<!-- 轮播开始 -->
    	<div class="js-silder">
	       <div class="silder-scroll">
	            <div class="silder-main">
	                <div class="silder-main-img">
	                    <img src="/Public/img/home/lunbo1.jpg" alt="轮播图" >
	                </div>
	                <div class="silder-main-img">
	                    <img src="/Public/img/home/lunbo2.jpg" alt="轮播图">
	                </div>
	                <div class="silder-main-img">
	                    <img src="/Public/img/home/lunbo3.jpg" alt="轮播图" >
	                </div>
	            </div>
	        </div>
    	</div>
    	<!-- 文章列表 -->
    	<h3 class="h3_m">最新文章</h3>
    	<article class="m_list">
    		<a href="" class="focus">
    			<img src="/Public/img/home/qinggan.jpg" alt="最新文章">
    		</a>
    		<header>
    			<span><a href="" target="_blank" style="color: #759b08;margin-left:5px;font-size:12px">【情感故事】</a></span>
    			<h2><a href="">俄罗斯摄影师Elena Shumilova摄影作品欣赏</a></h2>
    		</header>
    		<p class="meta">
    			<time><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-11-22</time>
    			<span class="pv"><i class="fa fa-eye"></i>&nbsp;&nbsp;阅读(33)</span>
    			<a href="" class="conment"><i class="fa fa-comments-o"></i>&nbsp;&nbsp;评论(0)</a>
    		</p>
    	</article>
    	<article class="m_list">
    		<a href="" class="focus">
    			<img src="/Public/img/home/qinggan.jpg" alt="最新文章">
    		</a>
    		<header>
    			<span><a href="" target="_blank" style="color: #9AB9F7;margin-left:5px;font-size:12px">【技术分享】</a></span>
    			<h2><a href="">俄罗斯摄影师Elena Shumilova摄影作品欣赏</a></h2>
    		</header>
    		<p class="meta">
    			<time><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-11-22</time>
    			<span class="pv"><i class="fa fa-eye"></i>&nbsp;&nbsp;阅读(33)</span>
    			<a href="" class="conment"><i class="fa fa-comments-o"></i>&nbsp;&nbsp;评论(0)</a>
    		</p>
    	</article>
    	<article class="m_list">
    		<a href="" class="focus">
    			<img src="/Public/img/home/qinggan.jpg" alt="最新文章">
    		</a>
    		<header>
    			<span><a href="" target="_blank" style="color: #759b08;margin-left:5px;font-size:12px">【情感故事】</a></span>
    			<h2><a href="">俄罗斯摄影师Elena Shumilova摄影作品欣赏</a></h2>
    		</header>
    		<p class="meta">
    			<time><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-11-22</time>
    			<span class="pv"><i class="fa fa-eye"></i>&nbsp;&nbsp;阅读(33)</span>
    			<a href="" class="conment"><i class="fa fa-comments-o"></i>&nbsp;&nbsp;评论(0)</a>
    		</p>
    	</article>
    	<article class="m_list">
    		<a href="" class="focus">
    			<img src="/Public/img/home/qinggan.jpg" alt="最新文章">
    		</a>
    		<header>
    			<span><a href="" target="_blank" style="color: #759b08;margin-left:5px;font-size:12px">【情感故事】</a></span>
    			<h2><a href="">俄罗斯摄影师Elena Shumilova摄影作品欣赏</a></h2>
    		</header>
    		<p class="meta">
    			<time><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-11-22</time>
    			<span class="pv"><i class="fa fa-eye"></i>&nbsp;&nbsp;阅读(33)</span>
    			<a href="" class="conment"><i class="fa fa-comments-o"></i>&nbsp;&nbsp;评论(0)</a>
    		</p>
    	</article>
	</body>
</html>
<script type="text/javascript">
// 点击弹出搜索框
function show(){
	$(".search_m").slideDown() ;
	$("#showSearch").hide();
	$("#hideSearch").show();
	$("#hideSearch").css("color","#FF926F")
	$(".top").css("border-bottom","1px solid #ddd")
}
function hide(){
	$(".search_m").slideUp();
	$("#showSearch").show();
	$("#hideSearch").hide();
	$("#showSearch").css("color","#FF926fgvtw2")
	$(".top").css("border-bottom","1px solid #fff")

}

 //手机导航适配
$(function () {
    var left = $('.left');
    var right = $('.right');
    var down = $('.down');
    var up = $('.up');
    var bg = $('.bgDiv');
    var leftNav = $('.leftNav');
    var rightNav = $('.rightNav');
    var downNav = $('.downNav');
    var upNav = $('.upNav');

    showNav(left, leftNav, "left");
    showNav(right, rightNav, "right");
    showNav(up, upNav, "up");
    showNav(down, downNav, "down");
    function showNav(btn, navDiv, direction) {
        btn.on('click', function () {
            bg.css({
                display: "block",
                transition: "opacity .5s"
            });
            if (direction == "right") {
                navDiv.css({
                    right: "0px",
                    transition: "right 1s"
                });
            } else if (direction == "left") {
                navDiv.css({
                    left: "0px",
                    transition: "left 1s"
                });
            } else if (direction == "up") {
                navDiv.css({
                    top: "0px",
                    transition: "top 1s"
                });
            } else if (direction == "down") {
                navDiv.css({
                    bottom: "0px",
                    transition: "bottom 1s"
                });
            }


        });
    }

    $('.menu').each(function () {
        var dom = $(this);
        dom.on('click', function () {
            hideNav();
         
        });
    });


    bg.on('click', function () {
        hideNav();
    });

    function hideNav() {
        leftNav.css({
            left: "-50%",
            transition: "left .5s"
        });
        rightNav.css({
            right: "-50%",
            transition: "right .5s"
        });
        upNav.css({
            top: "-40%",
            transition: "top .5s"
        });
        downNav.css({
            bottom: "-50%",
            webkitTransition:"bottom .5s",
            oTransition:"bottom .5s",
            mozTransition:"bottom .5s",
            transition: "bottom .5s"
        });
        bg.css({
            display: "none",
            transition: "display 1s"
        });
    }
});

// 轮播图
$(function (){
	$(".js-silder").silder({
        auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
        speed: 20,//轮播图运动速度
        sideCtrl: true,//是否需要侧边控制按钮
        bottomCtrl: true,//是否需要底部控制按钮
        defaultView: 0,//默认显示的索引
        interval: 3000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
        activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
    });
});
// 如果是iphone5文章列表不显示评论
var width = $(window).width();
			if(width < 321){
				$(".conment").hide();
			}else{
				$(".conment").show();
			}
</script>