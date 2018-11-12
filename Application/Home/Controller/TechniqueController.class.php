<?php
namespace Home\Controller;
use Think\Controller;
class TechniqueController extends AllowController {
    public function index(){
         // 查询情感故事文章列表
        $mod = M("article");
        $list = $mod->join("bg_type on bg_article.minType = bg_type.id")->where("bg_article.type=2")->order("bg_article.id desc")->select();
        // 查询点击排行
        $num = $mod->field("id,title,type,readCount")->order("readCount desc")->limit("10")->select();
        // 查询子菜单名字
        $zimenu = M("type");
        $vo = $zimenu->where("pid = 2")->order("id")->select();
        $this->assign("list",$list);
        $this->assign("num",$num);
        $this->assign("vo",$vo);
    	$this->display("index");
    }
    // 加载详情页
    public function detail(){
          // 查询子菜单名字
        $zimenu = M("type");
        $vo = $zimenu->where("pid = 2")->order("id")->select();
        $this->assign("vo",$vo);
    	$this->display("detail");
    }
    // 手机页面
    public function tindex(){
    	$this->display("tindex");
    }
    //手机端详情页
    public function tdetail(){
        $this->display('tdetail');
    }
}