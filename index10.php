<<<<<<< HEAD
<?php 
require_once 'include.php';
$cates=getAllmCate();
// var_dump($cates);
 ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="工作服定做,广州工作服定做,定做工作服,广州工作服厂,咪奴服装,广东咪奴服装有限公司">
    <meta name="keywords" content="咪奴是世界500强首选工作服供应商.广州工作服定做哪家好？咪奴服装是广州工作服厂家质量第一品牌.厂家价格.2016年最新款工作服大全.上门免费服务.工作服定做供应厂家.工作服定做哪里找.定做工作服哪里最好.">
    <link href="/publicimg/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <title>广州工作服定做,广州定做工作服厂家,广州工作服厂,定做工作服,咪奴服装,广东咪奴服装有限公司</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style type="text/css">
    /*body { padding-top: 5px; 
    font-family: "Microsoft YaHei", "宋体", "Open Sans", Arial, serif;}*/
    
   /* body {
        font-family: "Segoe UI", "Lucida Grande", Helvetica, Arial, "Microsoft YaHei", FreeSans, Arimo, "Droid Sans", "wenquanyi micro hei", "Hiragino Sans GB", "Hiragino Sans GB W3", FontAwesome, sans-serif;
        color: #444;
        background: #fbfbfb;
        padding-top: 10px;
    }*/

    /*.nav*/


    </style>
  
    <link rel="stylesheet" type="text/css" href="css/m-style.css">
</head>

<body>
    <!--header end-->
   <!--  <header class="header minu-header ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-top-right hidden-xs">
                        <a href="http://www.fanuman.com/" target="_blank">
                            <span class="glyphicon glyphicon-home"></span>
                            <span>法奴曼服装</span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="glyphicon glyphicon-envelope"></span>
                            <span>在线留言</span>
                        </a>
                        <a href="#" target="_blank">
                            <span class="glyphicon glyphicon-phone-alt"></span>
                            <span>联系我们</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-offset-1 myclass company-name-feat">
                        <img src="images/big-logo.jpg">
                        <div class="companyname1 col-md-offset-2  hidden-xs">
                            <h3>广东咪奴服装有限公司</h3>
                            <span>GUANGDONG MINU GARMENT CO.LTD</span>
                        </div>
                        <div class="companyname2 col-md-offset-1  hidden-xs">
                            <h4>品牌制服生产商</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <!-- <div class="container-full ">
-->
    <!-- <div class="row">
-->
    <!-- <div class="col-md-1"></div>
-->
 
    <!-- nav start -->
    <div class="navbar navbar-default  bs-docs-nav minu-navbar" id="mainnav" role="navigation">
        <div class="container">
        <!-- <div class="module left">
                <a href="/entrepreneurs/">
                    <img class="logo logo-dark" alt="Pitch Data" src="images/big-logo.jpg">
                </a>
            </div> -->
          <!-- <div><img src="images/big-logo.jpg"></div> -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                  <img alt="Brand" src="images/big-logo.jpg"></a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="/"></a> -->
            </div>
            <div class="navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav navbar-nav">
                    
                    <li class="myclass-test minu-index">
                        <a href="#">咪奴首页</a>
                    </li>
                    <li class="myclass-test">
                        <a href="#">工作服定制</a>
                    </li>
                    <li class="">
                        <a href="/docs">西装定制</a>
                    </li>
                    <li>
                        <a href="#">广告衫定制</a>
                    </li>
                    <li class="">
                        <a href="#">客户案例</a>
                    </li>
                    <li class="">
                        <a href="#">定做攻略</a>
                    </li>
                    <li class="">
                        <a href="#">品牌介绍</a>
                    </li>
                    <li class="">
                        <a href="#">联系我们</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- nav end -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li>
<li data-target="#carousel-example-generic" data-slide-to="3"></li>
<li data-target="#carousel-example-generic" data-slide-to="4"></li>
-->
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/index1.jpg" alt="0">
                <!-- <div class="carousel-caption">
<h1>Chorme</h1>
<p>Chorme介绍</p>
<p>
<a href="" class="btn btn-lg btn-primary" target="_blank" role="button">点我下载</a>
</p>
</div>
-->
            </div>
            <div class="item">
                <img src="images/index2.jpg" alt="1">
                <!-- <div class="carousel-caption">firefox-big</div>
-->
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
    <!-- 产品部分内容 start -->
    <div class="clearfix"></div>
    <div class="container g-bd-ser-newpro">
      <div class="row">
        <div class="col-sm-3 hidden-xs index-left g-sd-ser" id="index-left">
          <div class="block">
            <div class="m-ser-tel onlineservice">
              <h3>在线客户中心</h3>
              <!-- <img src="images/onlineservice.jpg"> -->
              </div>
            <div class="m-ser-tel">
              <span>总机：&nbsp;020-32364991</span>
            </div>
            <div class="m-ser-tel">
              <span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 020-32364661
              </span>
            </div>
            <div class="m-ser-tel">
              <span>国内部：</span>
            </div>
            <div class="m-ser-tel">
              <!--  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1556658072&amp;site=qq&amp;menu=yes" target="_blank">    
              <img title="点击这里给我发消息" alt="点击这里给我发消息" src="http://wpa.qq.com/pa?p=2:1556658072:41" border="0"></a>
            -->
            <img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=2537524937&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:2537524937:1 alt="点击这里给我发消息">    
            <span>2537524937</span>
          </div>
          <div class="m-ser-tel">
            <img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1367836114&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1367836114:1 alt="点击这里给我发消息">    
            <span>1367836114</span>
          </div>
          <div class="m-ser-tel">
            <span>国际部：</span>
          </div>
          <div class="m-ser-tel">
            <img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1508026900&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1508026900:1 alt="点击这里给我发消息">    
            <span>1508026900</span>
          </div>
          <div class="m-ser-tel">
            <span>生产部：</span>
          </div>
          <div class="m-ser-tel">
            <img style="CURSOR: pointer" onclick="javascript:window.open('http://b.qq.com/webc.htm?new=0&sid=1550966973&o=www.gdminu.com&q=7', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" border="0" SRC=http://wpa.qq.com/pa?p=1:1550966973:1 alt="点击这里给我发消息">    
            <span>1550966973</span>
          </div>
          <div class="m-wxchat-tit">
            <span>咪奴微信号：</span>
          </div>
          <div class="m-wxchat">
            <img src="images/wxchat.jpg">
          </div>
          <!-- cloth left start -->
          <div class="m-cloth-class">
            <!-- <img src="images/clothclass.gif"> -->
            </div>
        </div>

        <ul class="list-unstyled m-cloth-class-det" id="cloth-sort">  
          <li>
            <div class="m-cloth-pic panel">
               <!-- <img src="images/pp01.gif"> -->
                <h3>西装量身定制</h3>
            </div>
            
            <div class=" ">
              <ul class="cloth-list list-unstyled">
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">男士西装系列</a>
                </li>
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">女士西装系列</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="cloth-det">
            <div class="m-cloth-pic panel">
               <!-- <img src="images/pp02.gif"> -->
                <h3>衬衫定制</h3>
            </div>
            <div class="">
              <ul class="cloth-list list-unstyled">
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">男士短袖系列</a>
                </li>
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">女士短袖系列</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
          <div class="m-cloth-pic panel">
               <!-- <img src="images/pp03.gif"> -->
                <h3>T恤定制</h3>
            </div>
            
            <div class="">
              <ul class="cloth-list list-unstyled">
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">男士T恤系列</a>
                </li>
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">女士T恤系列</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
          <div class="m-cloth-pic panel">
               <!-- <img src="images/pp04.gif"> -->
                <h3>工程服定制</h3>
            </div>
            <div class="">
              <ul class="cloth-list list-unstyled">
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">男装工程服系列</a>
                </li>
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">女装工程服系列</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
          <div class="m-cloth-pic panel">
               <!-- <img src="images/pp05.gif"> -->
                <h3>量身定制</h3>
            </div>
            
            <div class="">
              <ul class="cloth-list list-unstyled">
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">西裤系列</a>
                </li>
                <li> <i class="icon-cross-left glyphicon glyphicon-plus"></i>
                  <a href="http://www.gdminu.com/producthst-97.html" target="_blank">女裤系列</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <!-- cloth left end  http://flagpolesky.com/ -->
      </div>
      <div class="col-sm-9 hot-pro-intro" id="hot-pro">
        <!-- <div class="block"> -->
          <header>
            <div class="hot-pro-title">
                <h2>最新产品</h2>
            </div>
            </header>
            <!-- <div class="row hot-pro-list"> -->
              
              <?php foreach($cates as $cate):
              $proImg=getCateImgById($cate['id']);
              // var_dump($proImg);
              ?>
              <div class="col-sm-4 col-xs-12 hot-pro">
                <div class="hot-pro-pic">
                  <a href="product.php?id=<?php echo $cate['id']; ?>" target="_blank">
                    <img class="fill avatar" src="admin/uploads/<?php echo $proImg['albumPath'];?>"></a>
                </div>
                <div class="hot-title">
                  <h2>
                    <a href="product.php?id=<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['cName']; ?></a>
                  </h2>
                </div>
              </div>
              <?php  endforeach;?>
              
              
            <!-- </div> -->
          
        <!-- </div> -->
      </div>
    </div>
    </div>
    <!-- 产品部分内容 end-->
    
    <!-- 制作流程部分 定做流程 end-->
    <div class="container product-process-list">
      <div class="row">
        <div class="process-tit">
            <h2>定做流程</h2>
            <em>企业权益第一，咪奴始终保障着企业工作服质量！</em>
            <div class="more pull-right"><a href="#" target="_blank">三分钟学会定做</a></div>
        </div>

                
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-2"></span></a>
          <span>
            <a href="" target="_blank">方案沟通</a>
          </span>
        </div>    
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-2"></span></a>
          <span>
            <a href="" target="_blank">样衣制作</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-3"></span></a>
          <span>
            <a href="" target="_blank">签订合同</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-4"></span></a>
          <span>
            <a href="" target="_blank">上门量体</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-5"></span></a>
          <span>
            <a href="" target="_blank">制作生产</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-12">
          <a href="" target="_blank"><span class="img-6"></span></a>
          <span>
            <a href="" target="_blank">质量检验</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-6">
          <a href="" target="_blank"><span class="img-7"></span></a>
          <span>
            <a href="" target="_blank">免费送货</a>
          </span>
        </div>
        <div class="col-xs-1 hidden-xs pro-glyphicon" >
          <span class="glyphicon glyphicon-arrow-right"></span>
        </div>
        <div class="product-process-item col-sm-4 col-xs-6">
          <a href="" target="_blank"><span class="img-8"></span></a>
          <span>
            <a href="" target="_blank">售后服务</a>
          </span>
        </div>
        
      </div>
    </div>
    <!-- 是否在担心 -->
    <div class="worry">
      
        <img src="images/worry.jpg">
      
    </div>
    <!-- 案例部分 -->
    <div class="container case-tit">
    <div class="row">
        <header>
            <h2 class="case-tit"><span>部分合作企业</span></h2>
          </header> 
    </div>
       
    </div>
    <div class="container caselist">
      <div class="row">
        <div class="col-sm-9 select-left" id="select-left">
          
          <div class=" select-cust-list">
            <div class="col-sm-4 col-xs-12 cust-list">
                <div class="cust-list-pic">
                  <a href="http://www.gdminu.com/">
                    <img class="fill avatar" src="/images/cust-01.jpg"></a>
                </div>
                <div class="hot-title">
                    <h4>德邦物流-工作服定做案例</h4>
                  <p>咪奴服装由技术精湛、经验丰富的设计团队，定期参加国际服装展，抓取当季服装行业流行趋势及元素。结合制服特点进行设计制作，让您企业工服永不落伍。</p>
                  <div class="cust-deta"><a href="">了解详情<span ></span></a></div>
                </div>
                
              </div>
          </div>
          <div class="select-cust-list">
            <div class="col-sm-4 col-xs-12 cust-list">
                <div class="cust-list-pic">
                  <a href="http://www.gdminu.com/">
                    <img class="fill avatar" src="/images/cust-01.jpg"></a>
                </div>
                <div class="hot-title">
                <h4>德邦物流-工作服定做案例</h4>
                  <p>十年定制经验，先进的生产设备，拥有国内顶尖的设计团队，为企业个性化需要，量身定制行业标杆工作服。</p>
                  <div class="cust-deta"><a href="">了解详情<span ></span></a></div>
                </div>
                
              </div>
          </div>
          <div class="select-cust-list">
            <div class="col-sm-4 col-xs-12 cust-list">
                <div class="cust-list-pic">
                  <a href="http://www.gdminu.com/">
                    <img class="fill avatar" src="/images/cust-01.jpg"></a>
                </div>
                <div class="hot-title">
                <h4>德邦物流-工作服定做案例</h4>
                  <p>根据行业工作特点，结合人体工程学原理。从材料的挑选、面料质感、工作穿衣的特殊要求，设计版型及色彩搭配，弥补人体美的不足。让您企业制服穿出品味。</p>
                  <div class="cust-deta"><a href="">了解详情<span ></span></a></div>
                </div>
                
              </div>
          </div>
          <div class="select-cust-list">
            <div class="col-sm-4 col-xs-12 cust-list">
                <div class="cust-list-pic">
                  <a href="http://www.gdminu.com/">
                    <img class="fill avatar" src="/images/cust-01.jpg"></a>
                </div>
                <div class="hot-title">
                <h4>德邦物流-工作服定做案例</h4>
                  <p>根据行业工作特点，结合人体工程学原理。从材料的挑选、面料质感、工作穿衣的特殊要求，设计版型及色彩搭配，弥补人体美的不足。让您企业制服穿出品味。</p>
                  <div class="cust-deta"><a href="">了解详情<span ></span></a></div>
                </div>
                
              </div>
          </div>
          <div class="select-cust-list">
            <div class="col-sm-4 col-xs-12 cust-list">
                <div class="cust-list-pic">
                  <a href="http://www.gdminu.com/">
                    <img class="fill avatar" src="/images/cust-01.jpg"></a>
                </div>
                <div class="hot-title">
                <h4>德邦物流-工作服定做案例</h4>
                  <p>根据行业工作特点，结合人体工程学原理。从材料的挑选、面料质感、工作穿衣的特殊要求，设计版型及色彩搭配，弥补人体美的不足。让您企业制服穿出品味。</p>
                  <div class="cust-deta"><a href="">了解详情<span ></span></a></div>
                </div>
                
              </div>
          </div>
          <div class="select-cust-list">
            <div class="col-sm-4 col-xs-12 cust-list">
                <div class="cust-list-pic">
                  <a href="http://www.gdminu.com/">
                    <img class="fill avatar" src="/images/cust-01.jpg"></a>
                </div>
                <div class="hot-title">
                <h4>德邦物流-工作服定做案例</h4>
                  <p>根据行业工作特点，结合人体工程学原理。从材料的挑选、面料质感、工作穿衣的特殊要求，设计版型及色彩搭配，弥补人体美的不足。让您企业制服穿出品味。</p>
                  <div class="cust-deta"><a href="">了解详情<span ></span></a></div>
                </div>
                
              </div>
          </div>
        </div>

        <div class="col-sm-3 customer-list" id="customer-list">
            <div class="col-sm-12 hidden-xs customer-list-tit">
                <h3>部分合作客户</h3>
                <!-- <img src="images/consumer-logo.jpg"> -->
                </div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie1.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie2.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie3.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie4.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie5.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie6.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie7.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie8.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie9.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie10.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie11.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie12.jpg"></div>
            <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie13.jpg"></div>
                <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie14.jpg"></div>
                <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie15.jpg"></div>
                <div class="col-sm-6 hidden-xs cust-list-rg ">
                <img class="fill avatar" src="/images/anlie16.jpg"></div>
        </div>
    </div>
    </div>
    <!-- 不要犹豫 -->
    
    <!-- 选择理由 -->
    <div class="container">
        <div class="row why-list">
            <div class="col-sm-12 col-xs-12 why-pic">
                <img src="images/why.jpg">
            </div>
            <div class="col-xs-12 why-sol">
                <h2>为什么选择咪奴的理由？</h2>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12"><h3>
                    <i class="why-num">1</i>行业版型领导者
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>咪奴服装由技术精湛、经验丰富的设计团队，定期参加国际服装展，抓取当季服装行业流行趋势及元素。结合制服特点进行设计制作，让您企业工服永不落伍。</p>
                        <!-- <a href=""><img src="images/o_btn1.gif"></a> -->
                        <!-- <div class="why-cau"> 货期短、交货快<i></i></div> -->

                    </div>
              </div>
            </div>
            <div class="col-sm-7 col-xs-12">
                <img src="images/cause-1.jpg">
            </div>
            <div class="col-sm-6 col-xs-12">
                <img src="images/cause-1.jpg">
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12"><h3>
                    <i class="why-num">2</i>专注顶尖工作服定制
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>十年定制经验，先进的生产设备，拥有国内顶尖的设计团队，为企业个性化需要，量身定制行业标杆工作服。</p>
                        <!-- <div class="why-cau"> 确保每件出厂服装都是精品<i></i></div> -->
                        <!-- <a href=""><img src="images/o_btn4.gif"></a> -->
                    </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-5 col-xs-12">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12"><h3>
                    <i class="why-num">3</i>品牌塑造口碑
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>严格按照质量管理体系，从原材料进厂，车间生产抽检，尾部系统质检。无论一粒扭扣．一根缎带．还是一个徽章严格按照咪奴5检3查系统的检验标准，确保每件产品的品质！</p>
                        <!-- <a href=""><img src="images/o_btn1.gif"></a> -->
                        <!-- <div class="why-cau"> 货期短、交货快<i></i></div> -->
                    </div>
              </div>
            </div>
            <div class="col-sm-7 col-xs-12">
                <img src="images/cause-1.jpg">
            </div>
            <div class="col-sm-6 col-xs-12">
                <img src="images/cause-1.jpg">
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12"><h3>
                    <i class="why-num">4</i>独有设计顾问一对一定制
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>业内首家拥有企业形象设计顾问团队，为每一家合作企业提供一对一式的企业员工形象塑造设计，让您的工作服更有企业文化。</p>
                        <!-- <div class="why-cau"> 确保每件出厂服装都是精品<i></i></div> -->
                        <!-- <a href=""><img src="images/o_btn4.gif"></a> -->
                    </div>
              </div>
            </div>
            <div class="clearfix"></div>
             <div class="col-sm-5 col-xs-12">
                <div class="col-xs-12 why-list-deta">
                    <header class="col-xs-12"><h3>
                    <i class="why-num">5</i>三大服务体系，让您高兴满意
                    </h3>
                    </header>
                    <div class="why-tel">
                      <p>我司严格按照：售前、售中、售后三大服务体系，由指定人员24小时跟踪服务。我们将以优质的产品、百分百的热情，竭诚为您服务。</p>
                        <!-- <a href=""><img src="images/o_btn1.gif"></a> -->
                        <!-- <div class="why-cau"> 货期短、交货快<i></i></div> -->

                    </div>
              </div>
            </div>
            <div class="col-sm-7 col-xs-12">
                <img src="images/cause-1.jpg">
            </div>
        </div>
    </div>
    <!-- 企业介绍 -->
    <div class="comp-intr-bg">
    <div class="container comp-intr">
        <div class="row">
       
            <div class="col-sm-5 col-xs-12 comp-intr-pic">
                <img src="images/company-intr.jpg">
            </div>
             <div class="comp-intr-tit"><a href=""><h3>广东咪奴服装有限公司企业简介</h3></a></div>
            <div class="col-sm-7 col-xs-12 comp-intr-deta">
                <p>一家集设计，制版，生产，销售为一体服装企业。公司制服部专业为企业团体“量身订做”各种制服、工作服、厂服等。公司建立了完善的专业化、一体化的企业服务体系。本着“以质量求生存，以创新求发展”管理理念，重视观念更新，全面引进最新电脑设备及先进缝纫技术，加强高工艺培训，由技术精湛、经验丰富的设计师及工艺师们组成的设计部，可根据客户的企业文化氛围、经营风格和理念等特殊需求进行全新的富有独特创意的设计和制作。</p>
                <p> 公司旗下制衣厂年产各类服饰130余万件，产品有毛料、棉料、TR等面料的各式服装，种类有单、夹、棉等，以珠江三角洲为中心向全国各地及港澳、欧美，东南亚地区辐射，建立了稳定的销售网络，形成了先进科学的网络营销和交易模式。</p>
                <div class="more"><a href="" target="_blank">更多介绍</a></div>
                
            </div>
        </div>
    </div>
    </div>
    <!-- 文字介绍 -->
    <div class="container">
        <div class="row newlist">
            <div class="col-sm-3 col-xs-12">
                <div class="new-list-tit">
                    <h3>新闻动态</h3>
                    <div class="new-more"><a class="btn btn-default " href="#" role="button">more</a></div>
                </div>
                <div class="new-cont">
                    <ul class="list-unstyled">
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 new-list-deta">
                <div class="new-list-tit">
                    <h3>服装知识</h3>
                    <div class="new-more"><a class="btn btn-default " href="#" role="button">more</a></div>
                    
                    <!-- <a href=""><i class=""></i><button class=""></button></a> -->
                </div>
                <div class="cloth-know">
                  
                    <ul class="list-unstyled">
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="new-list-tit">
                    <h3>定做问题</h3>
                    <div class="new-more"><a class="btn btn-default " href="#" role="button">more</a></div>
                </div>
                <div>
                    <ul class="list-unstyled">
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                        <li><i class="glyphicon glyphicon-triangle-right"></i><a href="" target="_blank">端午节放假时间安排</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="new-list-tit">
                    <img src="images/problem.jpg">
                    <!-- <div class="new-more"><a class="btn btn-default " href="#" role="button">more</a></div> -->
                </div>
                <div class="">
                    <form action="doAdminAction.php?act=addProblem" method="post" class="">
                    <div ><label for="cname">联系人:</label><input type="text" name="cName" id="cname" ></div>
                      <div><label for="ctel">电话:</label><input type="text" name="cTel" id="ctel"></div>
                      <div><label for="cemail">Email:</label><input type="text" name="cemail" id="cemail"></div>
                      <div><label for="cproblem">内容:</label><textarea name="cproblem" id="cproblem" rows="5" cols="20"></textarea></div>
                      <div><button type="submit">提交</button></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- 荣誉证书 -->
    <div class="container">
        <div class="row">
            
        </div>
    </div>
    <!-- foot title -->
    <!-- <div class="container">
        <div class="row ">
            <ul class="bs-docs-footer-links text-muted list-inline">
                <li>友情链接：</li>
                <li></li>
                <li>
                    <a href="#"></a>
                </li>
                <li>·</li>
                <li>
                    <a href="#"></a>
                </li>
                
                
            </ul>
        </div>
    </div> -->
    <!--footer-->
    <footer class="bs-docs-footer" role="contentinfo">
        <div class="container bd-foot">

            <p>
                广州市天河区珠村东横五路一号东裕商务大厦4楼
            </p>
            <p>
                总机 ：020-32364991 32364661 国内部：020-66623595 国际部：020-66690091 
            </p>
            <p>
                传真 ：020-66633676转808 QQ：1508026900 E-mai：888@gdminu.com 
                <a href="mailto:888@gdminu.com">888@gdminu.com</a> 
                <!-- &subject=工作服定制&body=工作服定制需求.... -->
            </p>
            
            <div class="footer-bottom">
          <ul class="list-inline text-center">
            <li><span class="copyright">Copyright ©2016 广东咪奴服装有限公司 - 版权所有 |  </span><a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备14088311</a></li>
            <li>
               <script language="javascript" type="text/javascript" src="http://js.users.51.la/17555432.js"></script>
               
            </li>
          </ul>
        </div>
            <ul class="bs-docs-footer-links text-muted list-inline">
              <li>友情链接：</li>
              <li></li>
              <li>
                <a href="http://www.septwolove.com" target="_blank">七匹狼男装</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.bjyhhr.com" target="_blank">劳保工作服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.bogoyas.com" target="_blank">西安西服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.szxiaofu.cn" target="_blank">校服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.gongfu28.com" target="_blank">深圳工作服</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.gzluomeng.com" target="_blank">贵阳西服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.bogoyas.com" target="_blank">西安西服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.szhlcb.com" target="_blank">服装衬布</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.bosimao88.com" target="_blank">高端服装定制</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.yicun1.com" target="_blank">职业装定制</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.bjkmlfz.com" target="_blank">校服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="http://www.bjyhhr.com" target="_blank">工作服定做</a>
              </li>
              <li>|</li>
              <li>
                <a href="www.justsuit.com" target="_blank">定制职业装</a>
              </li>
            </ul>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
=======
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
>>>>>>> 1ba896bfeaf209a92a07e1eeabfba6b80bd7697f
