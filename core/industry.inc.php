<?php 
/**
 * 添加分类的操作
 * @return string
 */
function addmIndustry(){
	$arr=$_POST;
	print_r($arr);
	if(insert("mind_industry",$arr)){
		$mes="分类添加成功!<br/><a href='addmIndustry.php'>继续添加</a>|<a href='listmIndustry.php'>查看分类</a>";
	}else{
		$mes="分类添加失败！<br/><a href='addmIndustry.php'>重新添加</a>|<a href='listmIndustry.php'>查看分类</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定分类信息
 * @param int $id
 * @return array
 */
function getmIndustryById($id){
	$sql="select id,iName from mind_industry where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改分类的操作
 * @param string $where
 * @return string
 */
function editmIndustry($where){
	$arr=$_POST;
	if(update("mind_industry", $arr,$where)){
		$mes="分类修改成功!<br/><a href='listmIndustry.php'>查看分类</a>";
	}else{
		$mes="分类修改失败!<br/><a href='listmIndustry.php'>重新修改</a>";
	}
	return $mes;
}

/**
 *删除分类
 * @param string $where
 * @return string
 */
function delmIndustry($id){
	$res=checkProExist($id);
	if(!$res){
		$where="id=".$id;
		if(delete("mind_industry",$where)){
			$mes="分类删除成功!<br/><a href='listmIndustry.php'>查看分类</a>|<a href='addmIndustry.php'>添加分类</a>";
		}else{
			$mes="删除失败！<br/><a href='listmIndustry.php'>请重新操作</a>";
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
function getAllmIndustry(){
	$sql="select id,iName from mind_industry";
	$rows=fetchAll($sql);
	return $rows;
}



