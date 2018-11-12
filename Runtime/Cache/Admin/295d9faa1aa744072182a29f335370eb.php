<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<script type="text/javascript" src="/Public/home/js/jquery-1.8.3.min.js"></script>

<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
.system-message{ padding: 24px 48px; }
.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
.system-message .jump{ padding-top: 10px}
.system-message .jump a{ color: #333;}
.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}

/*字体颜色*/
p{
	color:#000;
}
</style>
</head>
	
<body>
<!-- 随机颜色 -->
<script type="text/javascript">
	// mas=new Math();
	// setInterval("calerslct()",1300);
	calerslct();
	function calerslct(){
		masv1=Math.floor(Math.random()*16);
		// alert(masv1);
		masv2=Math.ceil(Math.random()*16);
		masv3=Math.ceil(Math.random()*16);
		masv4=Math.ceil(Math.random()*16);
		masv5=Math.ceil(Math.random()*16);
		masv6=Math.ceil(Math.random()*16);
		masv1=masv1.toString(16);
		masv2=masv2.toString(16);
		masv3=masv3.toString(16);
		masv4=masv4.toString(16);
		masv5=masv5.toString(16);
		masv6=masv6.toString(16);

		caler="#"+masv1+masv2+masv3+masv4+masv5+masv6;
		// caler1="#"+masv4+masv1+masv3+masv5+masv6+masv2;
		$("body").css("background",caler);
		// $("p").css("color",caler1);
	}
	
</script>
<!-- 随机颜色 -->

<div class="system-message">
<?php if(isset($message)) {?>
<p><img src="/ThinkPHP/Common/go.gif" alt="" /></p>
<p class="success"><?php echo($message); ?></p>
<?php }else{?>
<p><img src="/ThinkPHP/Common/go.gif" alt="" /></p>
<p class="error"><?php echo($error); ?></p>
<?php }?>
<p class="detail"></p>
<p class="jump">
页面即将 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a>  <b id="wait"><?php echo($waitSecond); ?></b><b id="wait">s</b>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>