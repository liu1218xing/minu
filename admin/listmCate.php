<?php 
require_once '../include.php';
header("content-type:text/html;charset=utf-8");
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
// print_r($_REQUEST);
$sql="select * from mind_cate";
$totalRows=getResultNum($sql);
$pageSize=2;
$totalPage=ceil($totalRows/$pageSize);
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,sortid,cName,isshow from mind_cate  order by id asc limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
// print_r($rows);
if(!$rows){
	alertMes("sorry,没有分类,请添加!","addCate.php");
	exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="styles/backstage.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addmCate()">
                        </div>
                            
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="15%">排序号</th>
                                <th width="25%">分类名称</th>
                                <th width="25%">首页是否展示</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  foreach($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <!-- <td><input type="text" id="c1" class="check"><label for="c1" class="label"><?php echo $row['id'];?></label></td> -->
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['sortid'];?></td>
                                <td><?php echo $row['cName'];?></td>
                                 <td><?php if($row['isshow']) echo "显示"; else echo "隐藏";?></td>
                                <td align="center"><input type="button" value="修改" class="btn" onclick="editmCate(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn"  onclick="delmCate(<?php echo $row['id'];?>)"></td>
                            </tr>
                            <?php endforeach;?>
                            <?php if($totalRows>$pageSize):?>
                            <tr>
                            	<td colspan="5"><nav><ul class="pagination"><?php echo showPage($page, $totalPage);?></ul></nav></td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
<script type="text/javascript">
	function editmCate(id){
		window.location="editmCate.php?id="+id;
	}
	function delmCate(id){
		if(window.confirm("您确定要删除吗？删除之后不能恢复哦！！！")){
			window.location="doAdminAction.php?act=delmCate&id="+id;
		}
	}
	function addmCate(){
		window.location="addmCate.php";
	}
</script>
</body>
</html>