<?php
namespace Home\Controller;
use Think\Controller;
class AllowController extends Controller {
    public function  _initialize(){
    	$id =1;
       $mod =M("Site");
       $res = $mod ->field("switch")->find($id);
       if($res['switch'] == 0){
       		 $this->display("Index/404");
       		exit();
       }
    }
}