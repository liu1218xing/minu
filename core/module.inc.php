<?php 
/**
 * 添加分类的操作
 * @return string
 */
function addmModule(){
	$arr=$_POST;
	print_r($arr);
	if(insert("mind_module",$arr)){
		$mes="分类添加成功!<br/><a href='addmModule.php'>继续添加</a>|<a href='listmModule.php'>查看分类</a>";
	}else{
		$mes="分类添加失败！<br/><a href='addmModule.php'>重新添加</a>|<a href='listmModule.php'>查看分类</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定分类信息
 * @param int $id
 * @return array
 */
function getmModuleById($id){
	$sql="select id,mName from mind_module where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改分类的操作
 * @param string $where
 * @return string
 */
function editmModule($where){
	$arr=$_POST;
	if(update("mind_module", $arr,$where)){
		$mes="分类修改成功!<br/><a href='listmModule.php'>查看分类</a>";
	}else{
		$mes="分类修改失败!<br/><a href='listmModule.php'>重新修改</a>";
	}
	return $mes;
}

/**
 *删除分类
 * @param string $where
 * @return string
 */
function delmModule($id){
	$res=checkProExist($id);
	if(!$res){
		$where="id=".$id;
		if(delete("mind_module",$where)){
			$mes="分类删除成功!<br/><a href='listmModule.php'>查看分类</a>|<a href='addmModule.php'>添加分类</a>";
		}else{
			$mes="删除失败！<br/><a href='listmModule.php'>请重新操作</a>";
		}
		return $mes;
	}else{
		alertMes("不能删除分类，请先删除该分类下的商品", "listPro.php");
	}
}

/**
 * 得到所有分类
 * @return array
 */
function getAllmModule(){
	$sql="select id,mName from mind_module";
	$rows=fetchAll($sql);
	return $rows;
}



