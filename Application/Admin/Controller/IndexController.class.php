<?php
namespace Admin\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf8");
class IndexController extends AllowController {
    public function index(){
        $this->display('index');
    }
    // 更改密码页面
    public function changepwd(){
    	$this->display("changepwd");
    }
    //原密码验证
    public function yanzheng(){
    	$yunmima=I('post.yuan','','htmlspecialchars');
    	$yuan =md5($yunmima);
    	$uid =session('uid');
        $mod=M("manager");
        $list=$mod->find($uid);
 		$pwd = $list['password'];
        if($pwd == $yuan){
            echo "yes";
        }else{
            echo "no";
        }
    }
    // 执行更改密码
    public function dochangepwd(){
    	$password =I('post.password','','htmlspecialchars');
    	$mod = M("manager");
    	$id =session("uid");
    	$data['password']=md5($password);
    	$res = $mod->where("id=$id")->save($data);
    	if($res){
            $this->success("修改成功",U("Index/changepwd"));
        }else{
            $this->error("修改失败");
        }
    }
}