<?php 
/**
 * 添加分类的操作
 * @return string
 */
function addParentCate(){
	$arr=$_POST;
	$arr['cdesc'] =htmlspecialchars($_POST['cdesc'], ENT_QUOTES);
	if(insert("mind_cate",$arr)){
		$mes="一级分类添加成功!<br/><a href='addmCate.php'>继续添加</a>|<a href='listmCate.php'>查看分类</a>";
	}else{
		$mes="一级分类添加失败！<br/><a href='addmCate.php'>重新添加</a>|<a href='listmCate.php'>查看分类</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定分类信息
 * @param int $id
 * @return array
 */
function getParentCateById($id){
	$sql="select id,sortid,cName from mind_cate where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改分类的操作
 * @param string $where
 * @return string
 */
function editParentCate($where){
	$arr=$_POST;
	if(update("mind_cate", $arr,$where)){
		$mes="分类修改成功!<br/><a href='listmCate.php'>查看分类</a>";
	}else{
		$mes="分类修改失败!<br/><a href='listmCate.php'>重新修改</a>";
	}
	return $mes;
}

/**
 *删除分类
 * @param string $where
 * @return string
 */
function delParentCate($id){
	$res=checkProExist($id);
	if(!$res){
		$where="id=".$id;
		if(delete("mind_cate",$where)){
			$mes="分类删除成功!<br/><a href='listmCate.php'>查看分类</a>|<a href='addmCate.php'>添加分类</a>";
		}else{
			$mes="删除失败！<br/><a href='listmCate.php'>请重新操作</a>";
		}
		return $mes;
	}else{
		alertMes("不能删除分类，请先删除该分类下的商品", "listmCate.php");
	}
}


/**
 * 得到所有分类
 * @return array
 */
function getAllParentCate(){
	$sql="select id,cName from parent_cate";
	$rows=fetchAll($sql);
	return $rows;
}



