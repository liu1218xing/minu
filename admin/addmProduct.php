<?php 
require_once '../include.php';
checkLogined();
$rows=getAllmCate();
if(!$rows){
	alertMes("没有相应分类，请先添加商品分类，可联系管理员!!", "addmCate.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link href="./styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor-all-min.js"></script>
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.6.4.js"></script>

<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
    //             K('input[name=getHtml]').click(function(e) {
    //             	K.sync('#editor_id');
    //             	var editor = document.getElementById('editor_id');
    //             	console.log(editor.value);
				// 	alert(editor.html());
				// });
        });
        $(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="thumbs[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
        		$path = $(this).val();
        		$filename = $path.substring($path.lastIndexOf("\\")+1);
        		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
        		$attachItem.find(".left").html($filename);
        		$("#attachList").append($attachItem);		
        		});
        	});
        	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
        	
        });
</script>
<!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
	
</style>
</head>
<body>
<h3>添加商品</h3>
<form action="doAdminAction.php?act=addmProduct" method="post" enctype="multipart/form-data" >
<table width="90%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">商品排序号</td>
		<td><input class="form-inline" type="text" name="sortid"  placeholder="商品排序号"/></td>
	</tr>
	<tr>
		<td align="right">商品类别</td>
		<td>
		<select name="cId">
			<option value="01"></option>
			<?php foreach($rows as $row):?>
				<option value="<?php echo $row['id'];?>"><?php echo $row['cName'];?></option>
			<?php endforeach;?>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">商品编码</td>
		<td><input type="text" name="pSn"  placeholder="请输入商品编码"/></td>
	</tr>
	<tr>
		<td align="right">商品名称</td>
		<td><input  type="text" name="pName"  placeholder="请输入商品名称"/></td>
	</tr>
	
	<tr>
		<td align="right">title关键词</td>
		<td><input type="text" name="ptitle"  placeholder="请输入title关键词"/></td>
	</tr>
	<tr>
		<td align="right">keywords关键词</td>
		<td><input type="text" name="pkey"  placeholder="请输入keywords关键词"/></td>
	</tr>
	<tr>
		<td align="right">description关键词</td>
		<td><input type="text" name="pdescription"  placeholder="请输入description关键词"/></td>
	</tr>
	<tr>
		<td align="right">商品摘要</td>
		<td><input type="text" name="psummary"  placeholder="请输入商品摘要"/></td>
	</tr>
	<tr>
		<td align="right">是否展示</td>
		<td>
			<input id="rd_1" type="radio" name="isShow" value="0"  checked /><label for="rd_1">显示</label>
			<input id="rd_2" type="radio" name="isShow" value="1" /><label for="rd_2">隐藏</label>
		</td>
	</tr>
	<tr>
		<td align="right">商品描述</td>
		<td>
			<textarea name="pDesc" id="editor_id" style="width:100%;height:350px;"></textarea>
		</td>
	</tr>
	
	<tr>
		<td align="right">商品图像</td>
		<td>
			<a href="javascript:void(0)" id="selectFileBtn">添加附件</a>
			<div id="attachList" class="clear"></div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="发布商品"/></td>
	</tr>
</table>
</form>
</body>
</html>