<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Bootstrap - 简洁、直观、强悍、移动设备优先的前端开发框架，让web开发更迅速、简单。">
  <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    body{
      padding-top: 50px;
    }
    .carousel{
      height: 500px;
      background-color: #000;
      margin-bottom: 60px;
    }
    .carousel .item{
      height: 500px;
      background-color: #000;
    }
    .carousel img {
      width: 100%;

      /*background-size: contain;*/
    }
    #summary-container .col-md-4{text-align: center;}
    hr.divider{margin: 40px 0;}
    .feature{
      padding: 30px 0;
    }
    .feature .feature-heading{
      font-size: 50px;
      color: #2a6496;
      margin-top: 120px;
      /*vertical-align: center; */
    }
    .feature .text-muted{
      font-size: 28px;
      color: #999;
    }
    .feature .lead{
      font-size: 21px;
      text-indent: 2em;
    }

  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">现代浏览器博物馆</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#">
              综述
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li>
            <a href="#">简述</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              特点
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">chrome</a>
              </li>
              <li>
                <a href="#">Firefox</a>
              </li>
              <li>
                <a href="#">Safari</a>
              </li>
              <li>
                <a href="#">Opera</a>
              </li>
              <li>
                <a href="#">IE</a>
              </li>
            </ul>
          </li>
          <li>
          <!-- <a href="#myModal" data-toggle="modal">关于</a> -->
          <li><a href="#" data-toggle="modal" data-target="#myModal">关于</a></li>
            <!-- <a href="#about" data-toggle="modal">关于</a> -->
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> </div>
    <!-- /.container-fluid --> </nav>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/chrome-big.jpg" alt="1">
        <div class="carousel-caption">
        <h1>Chorme</h1>
        <p>Chorme介绍</p>
        <p><a href="" class="btn btn-lg btn-primary" target="_blank" role="button">点我下载</a></p>
        </div>
      </div>
      <div class="item">
        <img src="images/firefox-big.jpg" alt="2">
        <div class="carousel-caption">
        firefox-big
        </div>
      </div>
      <div class="item">
        <img src="images/safari-big.jpg" alt="3">
        <div class="carousel-caption">
        safari-big
        </div>
      </div>
      <div class="item">
        <img src="images/opera-big.jpg" alt="4">
        <div class="carousel-caption">
        opera-big</div>
      </div><div class="item">
        <img src="images/ie-big.jpg" alt="5">
        <div class="carousel-caption">
        IE-big</div>
      </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">上一页</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">下一页</span>
    </a>
  </div>

  <div class="container" id="summary-container">
    <div class="row">
      <div class="col-md-4">
        <img src="images/chrome-logo-small.jpg" class="img-circle">
        <h2>Mozilla Firefox</h2>
        <p><a href="" class="btn btn-default" role="button">点击下载</a></p>
      </div>
      <div class="col-md-4">
        <img src="images/chrome-logo-small.jpg" class="img-circle">
        <h2>Mozilla Firefox</h2>
        <p><a href="" class="btn btn-default" role="button">点击下载</a></p>
      </div>
      <div class="col-md-4">
        <img src="images/chrome-logo-small.jpg" class="img-circle">
        <h2>Mozilla Firefox</h2>
        <p><a href="" class="btn btn-default" role="button">点击下载</a></p>
      </div>
    </div>  
    <hr class="divider">

    <div class="tabbable">
        <!-- Only required for left/right tabs -->      
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#tabChrome" data-toggle="tab">Chrome</a>
          </li>
          <li>
            <a href="#tabFirefox" data-toggle="tab">Firefox</a>
          </li>
          <li>
            <a href="#tabSafari" data-toggle="tab">Safari</a>
          </li>
          <li>
            <a href="#tabOpera" data-toggle="tab">Opera</a>
          </li>
          <li>
            <a href="#tabIE" data-toggle="tab">IE</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tabChrome">
            <div class="row feature">
              <div class="col-md-7">
                <h2 class="feature-heading">Google Chrome<span class="text-muted">使用最广的浏览器</span></h2>
                <p class="lead">Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。 该浏览器是基于其他开源软件所撰写，包括WebKit，目标是提升稳定性、速度和安全性，并创造出简单且有效率的使用者界面。</p>
              </div>
              <div class="col-md-5">
                <img src="images/chrome-logo.jpg">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabFirefox">
            <div class="row feature">
            <div class="col-md-5">
                <img src="images/firefox-logo.jpg">
              </div>
              <div class="col-md-7">
                <h2 class="feature-heading">Google Chrome<span class="text-muted">使用最广的浏览器</span></h2>
                
                <p class="lead">Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。 该浏览器是基于其他开源软件所撰写，包括WebKit，目标是提升稳定性、速度和安全性，并创造出简单且有效率的使用者界面。</p>
              </div>
              
            </div>
          </div>
          <div class="tab-pane" id="tabSafari">
            <div class="row feature">
              <div class="col-md-7">
                <h2 class="feature-heading">Google Chrome<span class="text-muted">使用最广的浏览器</span></h2>
                
                <p class="lead">Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。 该浏览器是基于其他开源软件所撰写，包括WebKit，目标是提升稳定性、速度和安全性，并创造出简单且有效率的使用者界面。</p>
              </div>
              <div class="col-md-5">
                <img src="images/safari-logo.jpg">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tabOpera">
            <div class="row feature">
            <div class="col-md-5">
                <img src="images/opera-logo.jpg">
              </div>
              <div class="col-md-7">
                <h2 class="feature-heading">Google Chrome<span class="text-muted">使用最广的浏览器</span></h2>
                
                <p class="lead">Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。 该浏览器是基于其他开源软件所撰写，包括WebKit，目标是提升稳定性、速度和安全性，并创造出简单且有效率的使用者界面。</p>
              </div>
              
            </div>
          </div>
          <div class="tab-pane" id="tabIE">
            <div class="row feature">
              <div class="col-md-7">
                <h2 class="feature-heading">Google Chrome<span class="text-muted">使用最广的浏览器</span></h2>
                <p class="lead">Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。 该浏览器是基于其他开源软件所撰写，包括WebKit，目标是提升稳定性、速度和安全性，并创造出简单且有效率的使用者界面。</p>
              </div>
              <div class="col-md-5">
                <img src="images/ie-logo.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>

      
  </div>
  
    <!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
            <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">关于</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
  </div>
  </div>
</div> 
<!-- 关于 -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
                    <h4 class="modal-title" id="modal-label">关于</h4>
                </div>
                <div class="modal-body">
                    <p>慕课网隶属于北京慕课科技中心(有限合伙)，是一家从事互联网免费教学的网络教育公司。秉承“开拓、创新、公平、分享”的精神，
                        将互联网特性全面的应用在教育领域，致力于为教育机构及求学者打造一站式互动在线教育品牌。</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">了解了</button>
                </div>
            </div>
        </div>
    </div> -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.1.0.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>