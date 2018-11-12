<?php
namespace Home\Controller;
use Think\Controller;
class LoveController extends AllowController {
    public function index(){
        // 查询情感故事文章列表
        $mod = M("article");
        $list=$mod->join("bg_type on bg_article.minType = bg_type.id")->where("bg_article.type=1")->order("bg_article.id desc")->select();
        // 查询点击排行
        $num = $mod->field("id,title,type,readCount")->order("readCount desc")->limit("10")->select();
        // 查询子菜单名字
        $zimenu = M("type");
        $vo = $zimenu->where("pid = 1")->order("id")->select();
        $this->assign("list",$list);
        $this->assign("num",$num);
        $this->assign("vo",$vo);
    	$this->display("index");
    }
    // 加载情感故事详情页
    public function detail(){
         // 查询子菜单名字
        $zimenu = M("type");
        $vo = $zimenu->where("pid = 1")->order("id")->select();
        $this->assign("vo",$vo);
    	$this->display('detail');
    }
    // 手机端情感故事页面列表
    public function lindex(){
    	$this->display('lindex');
    }
    // 手机端文章详情页
    public function ldetail(){
        $this->display('ldetail');
    }
}