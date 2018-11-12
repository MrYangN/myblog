<?php
	namespace Admin\Model;
	use Think\Model;
	
	class LoginModel extends Model{
		//此模型默认在hqy_login数据表里面操作
		//模型名称与数据表名称不一致，因此需要单独定义表名称及前缀
		//如不定义前缀，系统自动获取config.php里面的表前缀
		protected $tableName = 'manager';
		
		//登陆验证
		public function logincheck(){
			$name = I('post.username','','htmlspecialchars');
			$password =I('post.pwd','','htmlspecialchars');
			$flag =I('post.flag',0,'intval');
			$is_login1 ="on";
			$model = M('manager');
			$where['username'] = $name;
			$where['password'] = md5($password);
			$user = $model->where($where)->select();
			if($user){
				$uid=$user[0]['id'];
				//缓存用户名和密码用户id
				if($flag){
					cookie('username',$name,3600*24*7);//7天有效
					cookie('password',md5($password),3600*24*7);
					cookie('is_login1',$is_login1,3600*24*7);
					session('uid',$uid,3600*24*7);

				}
				session("realname",$user[0]['realname'],30*60);
				session('username',$name,30*60);//半小时有效
				session('password',md5($password),30*60);
				session('is_login1',$is_login1,30*60);
				session('uid',$uid,30*60);

				return array('rescode'=>'200','resmsg'=>'登陆成功');
			}else{
				return array('rescode'=>'403','resmsg'=>'用户名或密码不正确');
			}
			
		}
		//cookie自动登陆
		public function cookielogin(){
			$where['username'] = cookie('username');
			$where['password'] = cookie('password');
			$user = M('manager');
			$res = $user->where($where)->count();
			if($res){
				session('username',cookie('username'));
				session('password',cookie('password'));
				return true;
			}
		}
	}
?>