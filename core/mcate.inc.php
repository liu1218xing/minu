<?php 
/**
 * 添加分类的操作
 * @return string
 */
// function addmCate(){
// 	$arr=$_POST;
// 	$arr['cdesc'] =htmlspecialchars($_POST['cdesc'], ENT_QUOTES);
// 	if(insert("mind_cate",$arr)){
// 		$mes="一级分类添加成功!<br/><a href='addmCate.php'>继续添加</a>|<a href='listmCate.php'>查看分类</a>";
// 	}else{
// 		$mes="一级分类添加失败！<br/><a href='addmCate.php'>重新添加</a>|<a href='listmCate.php'>查看分类</a>";
// 	}
// 	return $mes;
// }
function addmCate(){
	$arr=$_POST;
	$arr['createTime']=time();
	$path="./uploads";
	$arr['cdesc'] =htmlspecialchars($_POST['cdesc'], ENT_QUOTES);
	// alert(htmlspecialchars($_POST['pDesc'], ENT_QUOTES));
	// print_r($arr['pDesc']);
	// alert($arr['pDesc']);
	// var_dump($arr['pDesc']);
	$uploadFiles=uploadFile($path);

	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../image_50/".$uploadFile['name'],50,50);
			thumb($path."/".$uploadFile['name'],"../image_220/".$uploadFile['name'],260,321);
			thumb($path."/".$uploadFile['name'],"../image_350/".$uploadFile['name'],350,350);
			thumb($path."/".$uploadFile['name'],"../image_800/".$uploadFile['name'],800,800);
		}
	}
	$res=insert("mind_cate",$arr);
	$pid=getInsertId();
	// var_dump($pid);
	if($res&&$pid){
		foreach($uploadFiles as $uploadFile){
			$arr1['pid']=$pid;
			$arr1['itype']=1;
			$arr1['albumPath']=$uploadFile['name'];
			// print_r($arr1);
			addAlbum($arr1);
		}
		$mes="<p>添加成功!</p><a href='addmCate.php' target='mainFrame'>继续添加</a>|<a href='listmCate.php' target='mainFrame'>查看商品列表</a>";
	}else{
		foreach($uploadFiles as $uploadFile){
			if(file_exists("../image_800/".$uploadFile['name'])){
				unlink("../image_800/".$uploadFile['name']);
			}
			if(file_exists("../image_50/".$uploadFile['name'])){
				unlink("../image_50/".$uploadFile['name']);
			}
			if(file_exists("../image_220/".$uploadFile['name'])){
				unlink("../image_220/".$uploadFile['name']);
			}
			if(file_exists("../image_350/".$uploadFile['name'])){
				unlink("../image_350/".$uploadFile['name']);
			}
		}
		$mes="<p>添加失败!</p><a href='addmCate.php' target='mainFrame'>重新添加</a>";
		
	}
	return $mes;
}


/**
 * 根据ID得到指定分类信息
 * @param int $id
 * @return array
 */
function getmCateById($id){
	$sql="select id,parentid,sortid,cName,isshow from mind_cate where id={$id}";
	return fetchOne($sql);
}

/**
 * 修改分类的操作
 * @param string $where
 * @return string
 */
function editmCate($where){
	$arr=$_POST;
	// var_dump($arr);
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
function delmCate($id){
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
function getAllmCate(){
	$sql="select id,sortid,cName from mind_cate order by id";
	$rows=fetchAll($sql);
	return $rows;
}




