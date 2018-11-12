<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends AllowController {
    public function index(){
     
    	// 查询推荐文章
    	$mod = M("article");
    	$list = $mod->field("id,title,type,images,readCount")->order("readCount desc")->limit("3")->select();
    	// 查询最新文章
    	$news = $mod->order("id desc")->limit("6")->select();
    	// 查询点击排行
    	$num = $mod->field("id,title,type,readCount")->order("readCount desc")->limit("10")->select();
    	$this->assign("list",$list);
    	$this->assign("news",$news);
    	$this->assign("num",$num);
       	$this->display("index");
    }
    //手机页面
    public function indexphone(){
    	$this->display("head");
    }
}