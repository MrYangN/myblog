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
    <h3>站点设置/<span style="font-size:18px">基本设置</span></h3><hr/>
      <!-- main star-->
      <style type="text/css">
        .form-control{width: 60%}
        label{font-weight: bold;}
      </style> 
      <form  action="/Admin/Site/SaveConfig" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="name">网站标题</label>
            <input type="text" class="form-control" id="name" name="title" value="<?php echo ($res["title"]); ?>">
          </div><hr/>
          <div class="form-group">
            <label for="keywords">网站关键字</label>
            <input type="text" class="form-control" id="keywords" name="keywords" value="<?php echo ($res["keywords"]); ?>" >
          </div><hr/>
            <div class="form-group">
            <label for="describe">网站描述</label>
            <input type="text" class="form-control" id="describe" name="describe" value="<?php echo ($res["describe"]); ?>" >
          </div><hr/>
            <div class="form-group">
            <label for="copyright">网站版权</label>
            <input type="text" class="form-control" id="copyright" name="copyright" value="<?php echo ($res["copyright"]); ?>" >
          </div><hr/>
          <div class="form-group">
            <label for="inputfile">网站LOGO</label>
            <input type="file" id="inputfile" name="logo">
          </div>
          <div class="form-group">
            <label >预览</label>
            <img src="/Public/Uploads/logo/<?php echo ($res["logo"]); ?>" alt="网站LOGO" style="width:150px;height:60px">
          </div><hr/>
          <?php if($res["switch"] == 1): ?><label>网站开关</label>
          <div class="switch switch-large" style="margin-left:15px;margin-top:5px">
              <input type="checkbox" checked value="1"  name="switch" />
          </div><hr/>
          <?php else: ?>
           <label>网站开关</label>
          <div class="switch switch-large" style="margin-left:15px;margin-top:5px">
              <input type="checkbox"  value="1" name="switch" />
          </div><hr/><?php endif; ?>
          <button type="submit" class="btn btn-default" style="margin-top:15px" id="tijiao">提交</button>
      </form>
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
<script src="/Public/js/bootstrap-switch.js"></script>