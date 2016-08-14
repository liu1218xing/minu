<?php 
require_once '../include.php';
checkLogined();
$rows=getAllmIndustry();
// var_dump($rows);
// if(!$rows){
// 	alertMes("没有相应分类，请先添加商品分类，可联系管理员!!", "editmCate.php");
// }
$id=$_REQUEST['id'];
$caseInfo=getmCaseById($id);
// var_dump($caseInfo);
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

<style type="text/css">
	
</style>
</head>
<body>
<h3>修改客户案例信息</h3>
<form action="doAdminAction.php?act=editmCase&id=<?php echo $id;?>" method="post" enctype="multipart/form-data" >
<table width="90%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">案例标题</td>
		<td><input  type="text" name="aName"  value="<?php echo $caseInfo['aName']; ?>" /></td>
	</tr>
	<tr>
		<td align="right">用户所属行业</td>
		<td>
		<select name="iId">
			<option value="01"></option>
			<?php foreach($rows as $row):?>
				<option value="<?php echo $row['id'];?>" <?php echo $row['id']==$caseInfo['iId']?"selected='selected'":null;?>><?php echo $row['iName'];?></option>
			<?php endforeach;?>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">案例来源</td>
		<td><input type="text" name="aSource"  value="<?php echo $caseInfo['aSource']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">案例作者</td>
		<td><input type="text" name="aAuthor"  value="<?php echo $caseInfo['aAuthor']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">网页标题栏名称</td>
		<td><input type="text" name="atitle"  value="<?php echo $caseInfo['atitle']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">keywords关键词</td>
		<td><input type="text" name="akey"  value="<?php echo $caseInfo['akey']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">description关键词</td>
		<td><input type="text" name="adescription"  value="<?php echo $caseInfo['adescription']; ?>"/></td>
	</tr>
	<!-- <tr>
		<td align="right">案例摘要</td>
		<td><input type="text" name="asummary"  placeholder="请输入案例摘要"/></td>
	</tr> -->
	<tr>
		<td align="right">是否展示</td>
		<td>
			<input id="rd_1" type="radio" name="isShow" value="1" <?php if($caseInfo['isShow']) echo 'checked'; ?> /><label for="rd_1">显示</label>
			<input id="rd_2" type="radio" name="isShow" value="0" <?php if(!$caseInfo['isShow']) echo 'checked'; ?> /><label for="rd_2">隐藏</label>
		</td>
	</tr>
	<tr>
		<td align="right">案例详细内容</td>
		<td>
			<textarea name="aDesc" id="editor_id" style="width:100%;height:350px;"><?php echo htmlspecialchars_decode($caseInfo['aDesc']);?></textarea>
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
		<td colspan="2"><input type="submit" value="发布客户案例"/></td>
	</tr>
</table>
</form>
</body>
</html>