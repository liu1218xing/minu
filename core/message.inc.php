<?php 
/**
 * 添加留言的操作
 * @return string
 */
function addProblem(){
	$arr=$_POST;
	// if(strlen($arr['mCustName']) <=0  ){
	// 	$mes="留言添加失败！<br/><a href='index.php'>返回首页</a>";
	// 	return $mes;
	// }

	$arr['createTime']= time();
	// print_r($arr);
	if(insert("mind_message",$arr)){
		$mes="谢谢您给我们留言，我们会尽快给您回复，请您静候佳音!<br/><a href='index.php'>返回首页</a>";
	}else{
		
		$mes="留言添加失败！<br/><a href='index.php'>返回首页</a>";
	}
	return $mes;
}

/**
 * 根据ID得到指定留言信息
 * @param int $id
 * @return array
 */
function getProblemById($id){
	$sql="select id,mCustName,mCustTel,mCustEmail,mCustDesc,mMark,mForllow,createTime from mind_message where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改留言的操作
 * @param string $where
 * @return string
 */
function editProblem($where){
	$arr=$_POST;
	if(update("mind_message", $arr,$where)){
		$mes="留言修改成功!<br/><a href='listCate.php'>查看留言</a>";
	}else{
		$mes="留言修改失败!<br/><a href='listCate.php'>重新修改</a>";
	}
	return $mes;
}

/**
 *删除留言
 * @param string $where
 * @return string
 */
function delProblem($id){
	$res=checkProExist($id);
	if(!$res){
		$where="id=".$id;
		if(delete("mind_message",$where)){
			$mes="留言删除成功!<br/><a href='listCate.php'>查看留言</a>|<a href='addCate.php'>添加留言</a>";
		}else{
			$mes="删除失败！<br/><a href='listCate.php'>请重新操作</a>";
		}
		return $mes;
	}else{
		alertMes("不能删除留言，请先删除该留言下的商品", "listPro.php");
	}
}

/**
 * 得到所有留言
 * @return array
 */
function getAllProblem(){
	$sql="select id,mCustName,mCustTel,mCustEmail,mCustDesc,mMark,mForllow,createTime from mind_message";
	$rows=fetchAll($sql);
	return $rows;
}



