<?php
namespace Admin\Controller;
use Think\Controller;
class AllowController extends Controller {
    public function _initialize(){
    	if(session('is_login1')!='on'){
    		$this->error("请先登陆后台",U("Login/index"));
    	}
    }
}