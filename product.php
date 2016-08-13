<?php 
require_once 'include.php';
header("content-type:text/html;charset=utf-8");
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
$cid=$_REQUEST['id'];
// print_r($_REQUEST);
$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from product as p join mind_cate c on p.cId=c.id where p.cId={$cid}";
$totalRows=getResultNum($sql);
$pageSize=3;
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from product as p join mind_cate c on p.cId=c.id where p.cId={$cid} order by id asc limit {$offset},{$pageSize}";
$pros=fetchAll($sql);
// $id=$_REQUEST['id'];
// $pros=getmProductsByCid($id);
// $proImgs=getProImgsById($id);
// if(!($proImgs &&is_array($proImgs))){
//   alertMes("商品图片错误", "index.php");
// }
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
    <header class="header minu-header ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-top-right hidden-xs">
                        <!-- <span class="fanuman"></span>
          -->
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
    </header>
    <!-- <div class="container-full ">
-->
    <!-- <div class="row">
-->
    <!-- <div class="col-md-1"></div>
-->
 
    <!-- nav start -->
    <div class="navbar navbar-default bs-docs-nav minu-navbar" id="mainnav" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="/">咪奴首页</a> -->
            </div>
            <div class="navbar-collapse collapse in" aria-expanded="true">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
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
    <div class="container g-bd-ser-newpro">
      <div class="row">
        <div class="col-sm-3 hidden-xs index-left g-sd-ser" id="index-left">
          <div class="block">
            <div class="m-ser-tel">
              <img src="images/onlineservice.jpg"></div>
            <div class="m-ser-tel">
              <span>总机：&nbsp;020-32364991</span>
            </div>
            <div class="m-ser-tel">
              <span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 020-32364661
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
          <!-- cloth left start -->
          <div class="m-cloth-class">
            <img src="images/clothclass.gif"></div>
        </div>

        <ul class="list-unstyled m-cloth-class-det" id="cloth-sort">  
          <li>
            <div class="m-cloth-pic panel">
               <img src="images/pp01.gif">
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
               <img src="images/pp02.gif">
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
               <img src="images/pp03.gif">
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
               <img src="images/pp04.gif">
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
               <img src="images/pp05.gif">
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
        <div class="block">
          <header>
            <div class="hot-pro-title">
                <h2>最新产品</h2>
                <!-- <hr> -->
            </div>
            
            <div class="row hot-pro-list">
              <?php foreach($pros as $pro):
              $proImg=getProductImgById($pro['id']);

              ?>
              <div class="col-sm-4 col-xs-12 hot-pro">
                <div class="hot-pro-pic">
                  <a href="productDetails.php?id=<?php echo $pro['id'];?>" target="_blank">
                    <img height="204" width ="165" class="fill avatar" src="admin/uploads/<?php echo $proImg['albumPath'];?>"></a>
                </div>
                <div class="hot-title">
                  <h2>
                    <a href="productDetails.php?id=<?php echo $pro['id'];?>" target="_blank"><?php echo $pro['pName']; ?></a>
                  </h2>
                </div>
              </div>
              <?php endforeach ?>  
              <div class="clearfix"></div>
              <div class="pull-right">
                <nav><ul class="pagination"><?php echo showProductPage($page, $totalPage,$cid);?></ul></nav>
              </div>

            </div>
          </header>
        </div>
      </div>
    </div>
    </div>

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
