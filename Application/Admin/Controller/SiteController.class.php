<?php
	namespace Admin\Controller;
	use Think\Controller;
	class SiteController extends Controller{
		//网站基本配置
	public function index(){
		$mod = M("site");
		$res = $mod->find();
		$this->assign("res",$res);
		$this->display('base');
	}
	// 修改网站配置
	public function SaveConfig(){
		$switch = I('post.switch','','htmlspecialchars');
		if($switch != 1){
			$switch = 0;
		}
		$mod=M("site");
        //查找原图片路径
        $oldLogo=$mod->field("logo")->find();
        // print_r($_FILES['logo']);die;
        if(!empty($_FILES['logo']['name'])){
            // 实例化上传类 
            $upload = new \Think\Upload();  
            // 设置附件上传大小 
            $upload->maxSize   =     3145728 ; 
            // 设置附件上传类型      
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg'); 
            // 设置附件上传目录
            $upload->rootPath  =      './Public/Uploads/logo/';    
            // 上传单个文件     
            $info   =   $upload->upload(); 
            // print_r($info);
            if(!$info) {
            // 上传错误提示错误信息        
                $this->error($upload->getError());    
            }else{
            // 上传成功 获取上传文件信息   
            // echo "<pre>";   
            // print_r($info);   
                unlink("./Public/Uploads/logo/{$oldLogo['logo']}");
                // echo "./Public/Uploads/logo/{$oldLogo['logo']}";die;
                $data['logo']="{$info['logo']['savepath']}"."{$info['logo']['savename']}"; 
                //改变图片大小
                $image = new \Think\Image();
                $image->open("./Public/Uploads/logo/{$data['logo']}");
                $image->thumb(256,60)->save("./Public/Uploads/logo/{$data['logo']}");
            }
        }else{
            $data['logo']= $oldLogo;
        }
        $data['title']=$_POST['title'];
        $data['keywords']=$_POST['keywords'];
        $data['describe']=$_POST['describe'];
        $data['copyright']=$_POST['copyright'];
        $data['switch']=$switch;
        // $mod->create();
        if($mod->where("id=1")->save($data)){
            //删除旧的图片
            $this->success("修改成功",U("Site/index"));
        }else{
            $this->error("修改失败",U("Site/index"));
        }	
	}
    // 修改友情链接页面
    public function blogroll(){
        $mod = M("blogroll");
        $count = $mod->count();
        $p = getpage($count,5);//调用common里的分页函数，每页显示5条
        $list = $mod->field(true)->order('id desc')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign("list",$list);
        $this->display("blogroll");
    }
    // 删除友链
        public function delete($id){
            $newsDel=M('blogroll')->delete($id);
            if ($newsDel) {
                $data['error'] = 0;
                $data['id'] = $id;
                $data['msg'] = '删除成功，请刷新';
            } else {
                $data['error'] = 1;
                $data['msg'] = "<span style='color:red'>删除失败</span>";
            }
             $this->ajaxReturn($data);
        }
    // 添加友链
        public function addBlogroll(){
            $title = $_POST['title'];
            $address = $_POST['address'];
            $data['title'] = $title;
            $data['address'] = $address;
            $mod = M("blogroll");
            $res = $mod->add($data);
            if($res){
                $this->redirect('Site/blogroll');
            }else{
                $this->error("添加失败",U("Site/blogroll"));
            }
        }
    // 修改友链ajax
        public function updateBlogroll($id){
           $mod = M("blogroll");
           $result = $mod->find($id);
           if($result){
            $this->ajaxReturn($result);
           }else{
            echo "no";
           }
        }
    // 执行修改友链
        public function doUpate(){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $address = $_POST['address'];
            $mod = M("blogroll");
            $data['title']=$title;
            $data['address']=$address;
            $res = $mod->where("id={$id}")->save($data);
            if($res){
                $this->redirect('Site/blogroll');
            }else{
                $this->error("修改失败",U("Site/blogroll"));
            }
        }
}
?>