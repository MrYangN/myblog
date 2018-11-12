<?php
	if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');//php环境检测
	define('APP_DEBUG',true);//开启调试模式
	define('APP_PATH','./Application/');//定义应用目录
	define('COMMON_PATH','./Common/'); //公共模块
	define('RUNTIME_PATH','./Runtime/'); //公共模块
	//define('BIND_MODULE','Admin');//绑定admin模块,目录生成后需要删除
	
	
	require './ThinkPHP/ThinkPHP.php';//载入框架入口文件