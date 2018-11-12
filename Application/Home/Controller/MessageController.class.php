<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends AllowController {
    public function index(){
    
    	$this->display("index");
    }
}