<?php 
require_once '../include.php';
checkLogined();
$cates=getAllmIndustry();
// var_dump($cates);
// if(!$cates){
// 	alertMes("没有相应分类，请先添加商品分类，可联系管理员!!", "addmCate.php");
// }
// var_dump($cates);
$wherecid=$_REQUEST['where']?$_REQUEST['where']:null;


$order=$_REQUEST['order']?$_REQUEST['order']:null;
$orderBy=$order?"order by ".$order:null;
$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where aName like '%{$keywords}%'":null;
if($wherecid){
	$where=$where?$where.' and iId = '.$wherecid : 'where iId = '.$wherecid ;
}
// var_dump($where);
//得到数据库中所有商品
$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow,iId from mind_case {$where}  ";
$totalRows=getResultNum($sql);
$pageSize=8;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow,iId from mind_case {$where} {$orderBy} limit {$offset},{$pageSize}";
$rows=fetchAll($sql);
// var_dump($rows);

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
                            <input type="button" value="添&nbsp;&nbsp;加" class="btn btn-default" onclick="addmCase()">
                        </div>
                        <div class="fr">
                            <div class="text">
                                <span>用户所属行业</span>
                                <div class="bui_select">
                                    <select id="changcid" class="form-control" onchange="changeiId(this.value)">
                                    	<option>-请选择-</option>
                                    	<?php foreach ($cates as $cate):?>
											<option value="<?php echo $cate['id']; ?>" ><?php echo $cate['iName'];?></option>
										<?php endforeach;?>

                                        
                                    </select>
                                </div>
                            </div>
                            <div class="text">
                                <span>创建时间：</span>
                                <div class="bui_select">
                                 <select id="" class="form-control" onchange="change(this.value)">
                                 	<option>-请选择-</option>
                                        <option value="createTime desc" >最新发布</option>
                                        <option value="createTime asc">历史发布</option>
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
                                <th width="20%">案例标题</th>
                                <th width="15%">用户所属行业</th>
                                <!-- <th width="10%">网页标题栏名称</th> -->
                                <th width="10%">是否展示</th>
                                <th width="15%">创建时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <!-- <td><input type="text" id="c<?php echo $row['id'];?>" class="check" value=<?php echo $row['id'];?>><label for="c1" class="label"><?php echo $row['id'];?></label></td> -->
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['aName']; ?></td>
                                <td><?php $industry = getmIndustryById($row['iId']); echo $industry['iName'];?></td>
                                
                                
                                <td>
                                	<?php echo $row['isShow']==1?"展示":"隐藏";?>
                                </td>
                                 <td><?php echo date("Y-m-d H:i:s",$row['createTime']);?></td>
                                  
                                <td align="center">
                                				<input type="button" value="详情" class="btn btn-default" onclick="showDetail(<?php echo $row['id'];?>,'<?php echo $row['pName'];?>')"><input type="button" value="修改" class="btn btn-default" onclick="editmCase(<?php echo $row['id'];?>)"><input type="button" value="删除" class="btn btn-default"onclick="delmCase(<?php echo $row['id'];?>)">
					                            <div id="showDetail<?php echo $row['id'];?>" style="display:none;">
					                        	<table class="table" cellspacing="0" cellpadding="0">
					                        		
					                        		<tr>
					                        			<td width="20%" align="right">案例标题</td>
					                        			<td><?php echo $row['aName'];?></td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">用户所属行业</td>
					                        			<td><?php echo $industry['iName'];?></td>
					                        		</tr>

					                        		<tr>
					                        			<td width="20%"  align="right">商品图片</td>
					                        			<td>
					                        			<?php 
					                        			$proImgs=getAllImgBymCaseId($row['id']);
					                        			foreach($proImgs as $img):
					                        			?>
					                        			<img width="100" height="100" src="uploads/<?php echo $img['albumPath'];?>" alt=""/> &nbsp;&nbsp;
					                        			<?php endforeach;?>
					                        			</td>
					                        		</tr>
					                        		<tr>
					                        			<td width="20%"  align="right">是否展示</td>
					                        			<td>
					                        				<?php echo $row['isShow']==1?"显示":"隐藏";?>
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
	function addmCase(){
		window.location='addmCase.php';
	}
	function editmCase(id){
		// alert(id);
		window.location='editmCase.php?id='+id;
	}
	function delmCase(id){
		if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
			window.location="doAdminAction.php?act=delmCase&id="+id;
		}
	}
	function search(){
		if(event.keyCode==13){
			var val=document.getElementById("search").value;
			window.location="listmCase.php?keywords="+val;
		}
	}
	function change(val){
		window.location="listmCase.php?order="+val;
	}
	function changeiId(val){
		window.location="listmCase.php?where="+val;
	}
</script>
</body>
</html>