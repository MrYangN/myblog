<?php
	namespace Admin\Controller;
	use Think\Controller;
	use think\Image;
	use think\Upload;
	class articleController extends Controller{
		//文章页面
		public function index(){
			// 查询文章列表
			$mod=M("article"); 
	       	
			// 判断有无搜索条件
	        if(!empty($_GET['title'])){
	     		$count = $mod->where("title like '%{$_GET['title']}%' ")->count();
	        	$p = getpage($count,5);//调用common里的分页函数，每页显示5条
	            $list = $mod->table('bg_article a, bg_type t')->field("a.title,a.id as aid,a.type,a.minType,a.curentTime,a.readCount,a.comment,t.id,t.typename")->where("a.minType = t.id AND a.title LIKE '%{$_GET['title']}%' ")->order('a.id desc')
	            ->limit($p->firstRow, $p->listRows)->select();
	        }else{
	        	$count = $mod->count();
	        	$p = getpage($count,5);//调用common里的分页函数，每页显示5条
	           $list = $mod->table('bg_article a, bg_type t')->field("a.title,a.id as aid,a.type,a.minType,a.curentTime,a.readCount,a.comment,t.id,t.typename")->where("a.minType = t.id")->order('a.id desc')->limit($p->firstRow, $p->listRows)->select();
	        }
	        $this->assign('page', $p->show()); // 赋值分页输出
			$this->assign("list",$list);
			$this->display('index');
		}
		// 删除文章
		public function delete($id){
	    	$articleDel=M('article')->delete($id);
	    	if ($articleDel) {
	    		$data['error'] = 0;
	    		$data['id'] = $id;
	    		$data['msg'] = '删除成功，请刷新';
	    	} else {
	    		$data['error'] = 1;
	    		$data['msg'] = "<span style='color:red'>删除失败</span>";
	    	}
	    	 $this->ajaxReturn($data);
	    }
	    //发布文章
	    public function add(){
	    	// 查询文章小类
	    	$mod=M("type");
	    	$first = $mod->where("pid=1")->select();
	    	$second = $mod->where("pid=2")->select();
	    	$this->assign("first",$first);
	    	$this->assign("second",$second);
	    	$this->display("addarticle");
	    }
	    // 执行发布文章
	    public function addarticle(){
    		date_default_timezone_set("PRC");
    		// echo "<pre>";
    		// var_dump($_POST);die;
			$title = I('post.title','','htmlspecialchars');
			$author = I("post.author",'','htmlspecialchars');
			$type = I("post.type",'','htmlspecialchars');
			if($type ==1){
				$minType = I("post.minType1",'','htmlspecialchars');
			}
			if($type ==2){
				$minType = I("post.minType2",'','htmlspecialchars');
			}
			$content = $_POST['content'];
			$data['title'] = $title;
			$data['content'] =$content;
			$data['author'] =$author;
			$data['type'] =$type;
			$data['minType'] =$minType;
			$data['curentTime'] = time();
			$data['readCount'] = 0;
			$data['comment'] =0;
			
			// 图片上传
			$upload = new \Think\Upload();// 实例化上传类    
		    $upload->maxSize   =     1400000 ;// 设置附件上传大小   
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		    $upload->rootPath  =      './Public/Uploads/admin/'; // 设置附件上传目录         
		    $info   =   $upload->upload(); // 上传文件   
		    if(!$info) {// 上传错误提示错误信息        
		    	$this->error($upload->getError());    
		    }else{      
		    	  //遍历数据
	            foreach($info as $file){
	                //实例化图片类
	                $img = new \Think\Image();
	                $img->open("./Public/Uploads/admin/".$file['savepath'].$file['savename']);
	                $_POST['images']=$file['savepath']."article_".$file['savename'];
	                //执行缩放
	                $img->thumb(200,200)->save("./Public/Uploads/admin/".$_POST['images']);
	            }
		    }
			$data['images'] = $file['savepath']."article_".$file['savename'];;
			$status = M('article')->add($data);
			if ($status) {
				$this->success("发布成功",U("article/index"));
			}else{
			 $this->error("发布失败");
			}	
	    }
	    // 编辑文章
	    public function edit(){
	    	$id = $_GET['id'];
	    	$mod = M("article");
	    	$mod2 =M("type");
	    	$res = $mod->find($id);
	    	$minType=$mod2->where("id={$res['minType']}")->find();
	    	$typename=$minType['typename'];
	    	// 查询文章小类
	    	$first = $mod2->where("pid=1")->select();
	    	$second = $mod2->where("pid=2")->select();
	    	$this->assign("res",$res);
	    	$this->assign("typename",$typename);
	    	$this->assign("first",$first);
	    	$this->assign("second",$second);
	    	$this ->display("edit");
	    }
	    // 执行编辑文章
	    public function doEdit(){
	    	date_default_timezone_set("PRC");
	    	$id = $_POST['id'];
	    	$title = $_POST['title'];
	    	$author = $_POST['author'];
	    	$curentTime = $_POST['curentTime'];
	    	$images = $_POST['images'];
	    	$content = $_POST['content'];
	    	$type = I("post.type",'','htmlspecialchars');
			if($type ==1){
				$minType = I("post.minType1",'','htmlspecialchars');
			}
			if($type ==2){
				$minType = I("post.minType2",'','htmlspecialchars');
			}
	    	$data['title'] = $title;
			$data['content'] =$content;
			$data['author'] =$author;
			$data['type'] =$type;
			$data['minType'] =$minType;
			//还原大图
	        $olderimg=preg_replace("/article_/","",$images);
	        //判断
            //删除大图
            unlink("./Public/Uploads/admin/".$olderimg);
            //删除缩放图
            unlink("./Public/Uploads/admin/".$images);
			$upload = new \Think\Upload();// 实例化上传类    
		    $upload->maxSize   =     1400000 ;// 设置附件上传大小   
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		    $upload->rootPath  =      './Public/Uploads/admin/'; // 设置附件上传目录         
		    $info   =   $upload->upload(); // 上传文件   
		    if(!$info) {// 上传错误提示错误信息        
		    	$this->error($upload->getError());    
		    }else{     
		    	  //遍历数据
	            foreach($info as $file){
	                //实例化图片类
	                $img = new \Think\Image();
	                $img->open("./Public/Uploads/admin/".$file['savepath'].$file['savename']);
	                $_POST['images']=$file['savepath']."article_".$file['savename'];
	                //执行缩放
	                $img->thumb(200,200)->save("./Public/Uploads/admin/".$_POST['images']);
	            }
		    }
			$data['images'] = $file['savepath']."article_".$file['savename'];
			$mod = M("article");
			$status =$mod->where("id={$id}")->save($data);
			if ($status) {
				$this->success("编辑成功",U("article/index"));
			}else{
			 $this->error("编辑失败");
			}	

	    }
	}
?>