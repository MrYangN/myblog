<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>   
    <title>杨先森博客后台管理--站点设置</title>
  </head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="杨先森博客, 杨先森博客后台, www.yangxianshen.com,博客，个人网站">
    <title>杨先森博客后台管理首页</title>
     <!-- 快捷图标 -->
   <link rel="shortcut icon" href="/Public/img/b.ico" type="image/x-icon"/>
    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/Public/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/Public/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="/Public/css/style.css" rel="stylesheet">
    <link href="/Public/css/style-responsive.css" rel="stylesheet">
    <script src="/Public/js/chart-master/Chart.js"></script>
  </head>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>杨先森博客网站后台管理</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-收件箱下拉-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/Public/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/Public/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/Public/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/Public/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end  收件箱下拉-->
                </ul>
                <!--  notification 通知 end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/Admin/Login/logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
  <!--sidebar start-->
  <aside>
      <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
          
          	  <p class="centered"><a href="/Admin/Index/changepwd"><img src="/Public/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
          	  <h5 class="centered">Marcel Newman</h5>
          	  	
              <li class="mt">
                  <a class="active" href="index.html">
                      <i class="fa fa-dashboard"></i>
                      <span>Dashboard</span>
                  </a>
              </li>

              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-bar-chart-o"></i>
                      <span>文章管理</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="/Admin/Article/index">文章列表</a></li>
                      <li><a  href="/Admin/Article/add">发布文章</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-book"></i>
                      <span>Extra Pages</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="blank.html">Blank Page</a></li>
                      <li><a  href="login.html">Login</a></li>
                      <li><a  href="lock_screen.html">Lock Screen</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-tasks"></i>
                      <span>Forms</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="form_component.html">Form Components</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-th"></i>
                      <span>Data Tables</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="basic_table.html">Basic Table</a></li>
                      <li><a  href="responsive_table.html">Responsive Table</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class=" fa fa-bar-chart-o"></i>
                      <span>Charts</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="morris.html">Morris</a></li>
                      <li><a  href="chartjs.html">Chartjs</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" >
                      <i class="fa fa-cogs"></i>
                      <span>站点设置</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="/Admin/Site/index">常规设置</a></li>
                      <li><a  href="/Admin/Site/blogroll">友链设置</a></li>
                  </ul>
              </li>
          </ul>
          <!-- sidebar menu end-->
      </div>
  </aside>
  <!--sidebar end-->
<!-- content  star-->
 <section id="main-content">
    <section class="wrapper">
    <h3>站点设置/<span style="font-size:18px">友链设置</span></h3><hr/>
      <!-- main star-->
      <style type="text/css">
        .form-control{width: 90%;margin-left: 20px}
        label{font-weight: bold;margin-left: 20px}
      </style> 
  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">添加友链</button><hr/>
  <!-- 添加友链模态框  star-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">添加友情链接</h4>
              </div>
              <form  action="/Admin/Site/addBlogroll" method="post">
                  <div class="form-group">
                    <label for="name">友链名称</label>
                    <input type="text" class="form-control"  name="title" placeholder="请输入友链名称">
                  </div>
                  <div class="form-group">
                    <label for="au">链接地址</label>
                    <input type="text" class="form-control"  name="address" placeholder="请输入链接地址" >
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                      <button type="submit" class="btn btn-primary">提交更改</button>
                  </div>
               </form>
          </div><!-- /.modal-content -->
      </div><!-- /.modal -->
    </div>
  <!-- 添加友链模态框  end -->

   <!-- 修改友链模态框  star-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="updateModal">修改友情链接</h4>
              </div>
              <form  action="/Admin/Site/doUpate" method="post">
                  <div class="form-group">
                    <label for="name">友链名称</label>
                    <input type="text" class="form-control" id="name" name="title" placeholder="请输入友链名称">
                    <input type="hidden" value="" id="uid" name="id">
                  </div>
                  <div class="form-group">
                    <label for="au">链接地址</label>
                    <input type="text" class="form-control" id="add" name="address" placeholder="请输入链接地址" >
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                      <button type="submit" class="btn btn-primary">提交更改</button>
                  </div>
               </form>
          </div><!-- /.modal-content -->
      </div><!-- /.modal -->
    </div>
  <!-- 修改友链模态框  end -->
  <div class="alert alert-info" style="display:none; background-color:#68dff0" >显示一些提示信息</div>
   <table class="table table-striped table-advance table-hover">
      <thead>
        <tr>
            <th><i class="fa glyphicon glyphicon-random"></i>友链名称</th>
            <th><i class="fa glyphicon glyphicon-map-marker"></i>链接地址</th>
            <th><i class="fa glyphicon glyphicon-wrench"></i> 操作</th>
        </tr>
      </thead>
      <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$row): ?><tr  id="tr_<?php echo ($row["id"]); ?>">
              <td><?php echo ($row["title"]); ?></td>
              <td><?php echo ($row["address"]); ?></td>
              <td>
                  <button class="btn btn-primary btn-xs upadte" data-toggle="modal" data-target="#updateModal" data-id="<?php echo ($row["id"]); ?>"><i class="fa fa-pencil"></i></button>&nbsp;&nbsp;
                  <a class="btn btn-danger btn-xs"href="javascript:;"  onclick="if(confirm('确定要删除该友链吗？')){ deleteData(<?php echo ($row["id"]); ?>)}"><i class="fa fa-trash-o "></i></a>
              </td>
          </tr><?php endforeach; endif; ?>
      </tbody>
    </table>
     <!-- 分页 star -->
    <div class="row" style="margin-top:15px">
       <div class="col-md-12 pages"><?php echo ($page); ?></div>
    </div>
    <!-- 分页  end -->
  <!-- main end -->
<!-- content  end -->
<!-- foot页面 没有登录提示信息 -->
 <footer class="site-footer" style="margin-top:20px">
  <div class="text-center">
      2017.yangning<a href="" target="_blank" title="杨先森博客后台管理">杨先森博客后台管理</a>杨先森博客 <a href="" title="杨先森博客" target="_blank">杨先森博客后台</a>
  </div>
</footer>
      <!--footer end-->
  </section>
</section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/Public/js/jquery.js"></script>
    <script src="/Public/js/jquery-1.8.3.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/Public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/Public/js/jquery.scrollTo.min.js"></script>
    <script src="/Public/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/Public/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="/Public/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="/Public/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/Public/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="/Public/js/sparkline-chart.js"></script>    
	<script src="/Public/js/zabuto_calendar.js"></script>	
  </body>
</html>
<script type="text/javascript">
// 删除友链
  function deleteData(id){
        $.ajax({
            type:"POST",
            url:"/Admin/Site/delete/id/"+id,
            success:function(data){
                if(data.error == 0){
                    $('#tr_'+data.id).remove();
                }
                $('.alert').html(data.msg).show();
                setTimeout(function() {
                    $('.alert').hide();
                }, 3000);
            }
        });
    }
// 修改友链
$(".upadte").click(function(event) {
    $(this).each(function(){
      var id = $(this).data("id");
      $.ajax({
        type:'post',
        url:'/Admin/Site/updateBlogroll/id/'+id,
        success:function(msg){
         if(msg =='no'){
          alert("修改失败！")
         }else{
            $("#name").val(msg.title);
            $("#add").val(msg.address);
            $("#uid").val(msg.id);
         }
        }
      })
    })
});
</script>