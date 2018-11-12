<?php
	namespace Admin\Controller;
	use Think\Controller;
	
	class LoginController extends Controller{
		
		//登陆界面
		public function index(){
		
			$this->display('login');
		}
		//登陆验证
		public function check(){
			if(IS_POST){
				$login = D('login'); //实例化Login模型
				$res = $login->logincheck(); //调用logincheck方法
				$this->ajaxReturn($res,'JSON');
			}else{
				$this->ajaxReturn(array('rescode'=>'500','resmsg'=>'内部错误'),'JSON');
			}
		}
		//退出系统
		public function logout(){
			session('username',null);
			session('password',null);
			session('is_login1',null);
			session('uid',null);
			cookie('username',null);
			cookie('password',null);
			cookie('is_login1',null);
			cookie('uid',null);
			$this->redirect('Login/index');
		}
	}
?>