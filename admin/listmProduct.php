<?php 
require_once '../include.php';
checkLogined();
$cates=getAllmCate();
if(!$cates){
	alertMes("没有相应分类，请先添加商品分类，可联系管理员!!", "addmCate.php");
}
// var_dump($cates);
$wherecid=$_REQUEST['where']?$_REQUEST['where']:null;


$order=$_REQUEST['order']?$_REQUEST['order']:null;
$orderBy=$order?"order by p.".$order:null;
$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where p.pName like '%{$keywords}%'":null;
if($wherecid){
	$where=$where?$where.' and p.cId = '.$wherecid : 'where p.cId = '.$wherecid ;
}
// var_dump($where);
//得到数据库中所有商品
$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from product as p join mind_cate c on p.cId=c.id {$where}  ";
$totalRows=getResultNum($sql);
$pageSize=2;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from product as p join mind_cate c on p.cId=c.id {$where} {$orderBy} limit {$offset},{$pageSize}";
$rows=fetchAll($sql);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="styles/backstage.css">
<link rel="stylesheet" href="scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  	.search{
  		display: inline-block;
  		width: 200px;
  	}
  	.btn-add{
  		display: inline-block;
  	}
  </style>
<script src="scripts/jquery-ui/js/jquery-1.10.2.js"></script>
<script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>

<body>
<div id="showDetail"  style="display:none;">

</div>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="btn-add">
                            <input type="button" value="添&nbsp;&nbsp;加" class="btn btn-default" onclick="addmProduct()">
                        </div>
                        <div class="fr">
                            <div class="text">
                                <span>商品分类</span>
                                <div class="bui_select">
                                    <select id="changcid" class="form-control" onchange="changecid(this.value)">
                                    	<option>-请选择-</option>
                                    	<?php foreach ($cates as $cate):?>
											<option value="<?php echo $cate['id']; ?>" ><?php echo $cate['cName'];?></option>
										<?php endforeach;?>

                                        
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                                <span>上架时间：</span>
                                <div class="bui_select">
                                 <select id="" class="form-control" onchange="change(this.value)">
                                 	<option>-请选择-</option>
                                        <option value="pubTime desc" >最新发布</option>
                                        <option value="pubTime asc">历史发布</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                            <span>搜索</span>
                                <input type="search"  class="form-control search"  id="search" onkeypress="search()" >
                            </div>
                        </div>
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="5%">序号</th>
                                <th width="10%">商品编码</th>
                                <th width="20%">商品名称</th>
                                <th width="10%">商品分类</th>
                                <th width="10%">是否展示</th>
                                <th width="15%">上架时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <!-- <td><input type="text" id="c<?php echo $row['id'];?>" class="check" value=<?php echo $row['id'];?>><label for="c1" class="label"><?php echo $row['id'];?></label></td> -->
								<td><?php echo $row['id'];?></td>
                                <td><?php echo $row['pSn'];?></td>
                                <td><?php echo $row['pName']; ?></td>
                                <td><?php echo $row['cName'];?></td>
                                <td>
                                	<?php echo $row['isShow']==1?"展示":"隐藏";?>
                                </td>
                                 <td><?php echo date("Y-m-d H:i:s",$row['pubTime']);?></td>
                                  
                                <td align="center">
                                				<input type="button" value="详情" class="btn btn-default" onclick="showDetail(<?php echo $row['id'];?>,'<?php echo $row['pName'];?>')"><input type="button" value="修改" class="btn btn-default" onclick="editmProduct(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn btn-default"onclick="delmProduct(<?php echo $row['id'];?>)">
					                            <div id="showDetail<?php echo $row['id'];?>" style="display:none;">
					                        	<table class="table" cellspacing="0" cellpadding="0">
					                        		<tr>
					                        			<td width="20%"  align="right">商品货号</td>
					                        			<td><?php echo $row['pSn'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%" align="right">商品名称</td>
					                        			<td><?php echo $row['pName'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">商品类别</td>
					                        			<td><?php echo $row['cName'];?></td>
					                        		</tr>
					                        		
					                        		
					                        		
					                        		
					                        		<tr>
					                        			<td width="20%"  align="right">商品图片</td>
					                        			<td>
					                        			<?php 
					                        			$proImgs=getAllImgBymProductId($row['id']);
					                        			foreach($proImgs as $img):
					                        			?>
					                        			<img width="100" height="100" src="uploads/<?php echo $img['albumPath'];?>" alt=""/> &nbsp;&nbsp;
					                        			<?php endforeach;?>
					                        			</td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">是否上架</td>
					                        			<td>
					                        				<?php echo $row['isShow']==1?"上架":"下架";?>
					                        			</td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">是否热卖</td>
					                        			<td>
					                        				<?php echo $row['isHot']==1?"热卖":"正常";?>
					                        			</td>
					                        		</tr>
					                        	</table>
					                        	<span style="display:block;width:80%; ">
					                        	商品描述<br/>
					                        	<?php echo htmlspecialchars_decode($row['pDesc']);?>
					                        	</span>
					                        </div>
                                
                                </td>
                            </tr>
                           <?php  endforeach;?>
                           <?php if($totalRows>$pageSize):?>
                            <tr> 
                            	<td colspan="7"><nav><ul class="pagination"><?php echo showPage($page, $totalPage,"keywords={$keywords}&order={$order}");?></ul></nav> </td>
                            </tr>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
<script type="text/javascript">
function showDetail(id,t){
	$("#showDetail"+id).dialog({
		  height:"auto",
	      width: "auto",
	      position: {my: "center", at: "center",  collision:"fit"},
	      modal:false,//是否模式对话框
	      draggable:true,//是否允许拖拽
	      resizable:true,//是否允许拖动
	      title:"商品名称："+t,//对话框标题
	      show:"slide",
	      hide:"explode"
	});
}
	function addmProduct(){
		window.location='addmProduct.php';
	}
	function editmProduct(id){
		// alert(id);
		window.location='editmProduct.php?id='+id;
	}
	function delmProduct(id){
		if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
			window.location="doAdminAction.php?act=delmProduct&id="+id;
		}
	}
	function search(){
		if(event.keyCode==13){
			var val=document.getElementById("search").value;
			window.location="listmProduct.php?keywords="+val;
		}
	}
	function change(val){
		window.location="listmProduct.php?order="+val;
	}
	function changecid(val){
		window.location="listmProduct.php?where="+val;
	}
</script>
</body>
</html>