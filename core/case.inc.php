<?php 
/**
 * 添加客户案例
 * @return string
 */
function addmCase(){
	$arr=$_POST;
	$arr['createTime']=time();
	$path="./uploads";
	$arr['aDesc'] =htmlspecialchars($_POST['aDesc'], ENT_QUOTES);
	// print_r($arr['aDesc']);
	// alert($arr['aDesc']);
	// var_dump($arr);
	$uploadFiles=uploadFile($path);

	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../image_50/".$uploadFile['name'],50,50);
			thumb($path."/".$uploadFile['name'],"../image_220/".$uploadFile['name'],220,220);
			thumb($path."/".$uploadFile['name'],"../image_350/".$uploadFile['name'],350,350);
			thumb($path."/".$uploadFile['name'],"../image_800/".$uploadFile['name'],800,800);
		}
	}
	$arr['aImg']=$uploadFile['name'];
	$res=insert("mind_case",$arr);
	$pid=getInsertId();
	if($res&&$pid){
		foreach($uploadFiles as $uploadFile){
			$arr1['pid']=$pid;
			$arr1['itype']=3;
			$arr1['albumPath']=$uploadFile['name'];
			addAlbum($arr1);
		}
		$mes="<p>添加成功!</p><a href='addmCase.php' target='mainFrame'>继续添加</a>|<a href='listmCase.php' target='mainFrame'>查看客户案例列表</a>";
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
		$mes="<p>添加失败!</p><a href='addmCase.php' target='mainFrame'>重新添加</a>";
		
	}
	return $mes;
}
/**
 *编辑客户案例
 * @param int $id
 * @return string
 */
function editmCase($id){
	$arr=$_POST;
	$arr['createTime']=time();
	$arr['aDesc'] =htmlspecialchars($_POST['aDesc'], ENT_QUOTES);
	$path="./uploads";
	$uploadFiles=uploadFile($path);
	if(is_array($uploadFiles)&&$uploadFiles){
		foreach($uploadFiles as $key=>$uploadFile){
			thumb($path."/".$uploadFile['name'],"../image_50/".$uploadFile['name'],50,50);
			thumb($path."/".$uploadFile['name'],"../image_220/".$uploadFile['name'],220,220);
			thumb($path."/".$uploadFile['name'],"../image_350/".$uploadFile['name'],350,350);
			thumb($path."/".$uploadFile['name'],"../image_800/".$uploadFile['name'],800,800);
		}
	}
	$where="id={$id}";
	// print_r($uploadFile['name']);
	if($uploadFile) {
		$arr['aImg']=$uploadFile['name'];
	}
	$res=update("mind_case",$arr,$where);
	// var_dump($arr);
	
	$pid=$id;
	if($res&&$pid){
		if($uploadFiles &&is_array($uploadFiles)){
			foreach($uploadFiles as $uploadFile){
				$arr1['pid']=$pid;
				$arr1['itype']=3;
				$arr1['albumPath']=$uploadFile['name'];
				addAlbum($arr1);
			}
		}
		$mes="<p>编辑成功!</p><a href='listmCase.php' target='mainFrame'>查看客户案例列表</a>";
	}else{
	if(is_array($uploadFiles)&&$uploadFiles){
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
	}
		$mes="<p>编辑失败!</p><a href='listmCase.php' target='mainFrame'>重新编辑</a>";
		
	}
	return $mes;
}

function delmCase($id){
	$where="id=$id";
	$res=delete("mind_case",$where);
	var_dump($res);
	$proImgs=getAllImgBymCaseId($id);
	if($proImgs&&is_array($proImgs)){
		foreach($proImgs as $proImg){
			if(file_exists("uploads/".$proImg['albumPath'])){
				unlink("uploads/".$proImg['albumPath']);
			}
			if(file_exists("../image_50/".$proImg['albumPath'])){
				unlink("../image_50/".$proImg['albumPath']);
			}
			if(file_exists("../image_220/".$proImg['albumPath'])){
				unlink("../image_220/".$proImg['albumPath']);
			}
			if(file_exists("../image_350/".$proImg['albumPath'])){
				unlink("../image_350/".$proImg['albumPath']);
			}
			if(file_exists("../image_800/".$proImg['albumPath'])){
				unlink("../image_800/".$proImg['albumPath']);
			}
			
		}
	}
	$where1="pid={$id}";
	$res1=delete("mind_album",$where1);
	if($res&&$res1){
		$mes="删除成功!<br/><a href='listmCase.php' target='mainFrame'>查看客户案例列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listmCase.php' target='mainFrame'>重新删除</a>";
	}
	return $mes;
}


/**
 * 得到客户案例的所有信息
 * @return array
 */
function getAllmCaseByAdmin(){
	$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow from mind_case ";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据客户案例id得到客户案例图片
 * @param int $id
 * @return array
 */
function getAllImgBymCaseId($id){
	$sql="select a.albumPath from mind_album a where itype =2 and pid={$id}";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 *根据客户案例id得到客户案例图片
 * @param int $id
 * @return array
 */
function getmCaseImgById($id){
	$sql="select a.albumPath from mind_album a where itype =2 and pid={$id} limit 1";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 * 根据id得到客户案例的详细信息
 * @param int $id
 * @return arrayptitle | pkey | aDescription | psummary 
 */
function getmCaseById($id){
		$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow,iId from mind_case where id={$id}";
		$row=fetchOne($sql);
		return $row;
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkmCaseExist($cid){
	$sql="select * from mind_case where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到所有客户案例
 * @return array
 */
function getAllmCases(){
	$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow from mind_case ";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据cid得到4条产品
 * @param int $cid
 * @return Array
 */
function getmCasesByCid($cid){
	$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow from mind_case  where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到下4条产品
 * @param int $cid
 * @return array
 */
function getSmallmCasesByCid($cid){
	$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow from mind_case where iId={$cid} limit 4,4";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *得到客户案例ID和客户案例名称
 * @return array
 */
function getmCaseInfo(){
	$sql="select id,pName from mind_case order by id asc";
	$rows=fetchAll($sql);
	return $rows;
}




