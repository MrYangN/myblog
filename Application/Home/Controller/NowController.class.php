<?php
namespace Home\Controller;
use Think\Controller;
class NowController extends AllowController {
    public function index(){
    	$curentId = $_GET['curentId'];
    	$this->assign("curentId",$curentId);
    	$this->display("index");
    }
}