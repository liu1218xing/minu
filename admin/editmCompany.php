<?php 
require_once '../include.php';
checkLogined();
$id=$_REQUEST['id'];
$row=getmCompanyById($id);
// print_r($row);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link href="./styles/global.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"></script>
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
</head>
<body>
<h3>编辑商品</h3>
<form action="doAdminAction.php?act=editmCompany&id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
<table width="90%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">文章标题</td>
		<td><input  type="text" name="aName"  value="<?php echo $row['aName']; ?>" /></td>
	</tr>
	<tr>
		<td align="right">文章来源</td>
		<td><input type="text" name="aSource"  value="<?php echo $row['aSource']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">文章作者</td>
		<td><input type="text" name="aAuthor"  value="<?php echo $row['aAuthor']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">网页标题栏名称</td>
		<td><input type="text" name="atitle"  value="<?php echo $row['atitle']; ?>"名称"/></td>
	</tr>
	<tr>
		<td align="right">keywords关键词</td>
		<td><input type="text" name="akey"  value="<?php echo $row['akey']; ?>"rds关键词"/></td>
	</tr>
	<tr>
		<td align="right">description关键词</td>
		<td><input type="text" name="adescription"  value="<?php echo $row['adescription']; ?>"iption关键词"/></td>
	</tr>
	<tr>
		<td align="right">商品摘要</td>
		<td><input type="text" name="asummary"  value="<?php echo $row['asummary']; ?>"/></td>
	</tr>
	<tr>
		<td align="right">是否展示</td>
		<td>
			<input id="rd_1" type="radio" name="isShow" value="1" <?php if($row['isShow']) echo 'checked'; ?> /><label for="rd_1">显示</label>
			<input id="rd_2" type="radio" name="isShow" value="0" <?php if(!$row['isShow']) echo 'checked'; ?> /><label for="rd_2">隐藏</label>
		</td>
	</tr>
	<tr>
		<td align="right">文章详细内容</td>
		<td>
			<textarea name="aDesc" id="editor_id" style="width:100%;height:350px;" ><?php echo htmlspecialchars_decode($row['aDesc']);?></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="发布文章"/></td>
	</tr>
	
</table>
</form>
</body>
</html>