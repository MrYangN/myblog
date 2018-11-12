<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL' => 2,
	'URL_HTML_SUFFIX' => 'html',
	'MODULE_DENY_LIST' => array('Common'), //禁止访问模块
	'MODULE_ALLOW_LIST' => array('Home','Admin'), //允许访问模块
	'DEFAULT_MODULE' => 'Home', //默认模块
	'DB_TYPE' => 'mysql', 
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'myblog', //本地tns配置名，不是数据库id
	'DB_USER' => 'root',//用户名
	'DB_PWD' => '',
	'DB_PORT' => '3306',//端口
	'DB_PREFIX' => 'bg_', //表前缀
	'SHOW_PAGE_TRACE' => false, //trace信息
	'URL_CASE_INSENSITIVE' =>true //不区分URL大小写
);