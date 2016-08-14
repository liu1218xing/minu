<?php 
/**
 * 添加商品
 * @return string
 */
function addmCompany(){
	$arr=$_POST;
	$arr['createTime']=time();
	$path="./uploads";
	$arr['aDesc'] =htmlspecialchars($_POST['aDesc'], ENT_QUOTES);
	// print_r($arr['pDesc']);
	// alert($arr['pDesc']);
	// var_dump($arr);
	// $uploadFiles=uploadFile($path);

	// if(is_array($uploadFiles)&&$uploadFiles){
	// 	foreach($uploadFiles as $key=>$uploadFile){
	// 		thumb($path."/".$uploadFile['name'],"../image_50/".$uploadFile['name'],50,50);
	// 		thumb($path."/".$uploadFile['name'],"../image_220/".$uploadFile['name'],220,220);
	// 		thumb($path."/".$uploadFile['name'],"../image_350/".$uploadFile['name'],350,350);
	// 		thumb($path."/".$uploadFile['name'],"../image_800/".$uploadFile['name'],800,800);
	// 	}
	// }
	// $res=insert("mind_company",$arr);
	if(insert("mind_company",$arr)){
		$mes="<p>添加成功!</p><a href='addmCompany.php' target='mainFrame'>继续添加</a>|<a href='listmCompany.php' target='mainFrame'>查看商品列表</a>";
	}else{
		$mes="<p>添加失败!</p><a href='addmCompany.php' target='mainFrame'>重新添加</a>";
	}
	return $mes;
	// $pid=getInsertId();
	// if($res&&$pid){
	// 	foreach($uploadFiles as $uploadFile){
	// 		$arr1['pid']=$pid;
	// 		// $arr1['itype']=2;
	// 		$arr1['albumPath']=$uploadFile['name'];
	// 		addAlbum($arr1);
	// 	}
		// $mes="<p>添加成功!</p><a href='addmCompany.php' target='mainFrame'>继续添加</a>|<a href='listmCompany.php' target='mainFrame'>查看商品列表</a>";
	// }else{
	// 	foreach($uploadFiles as $uploadFile){
	// 		if(file_exists("../image_800/".$uploadFile['name'])){
	// 			unlink("../image_800/".$uploadFile['name']);
	// 		}
	// 		if(file_exists("../image_50/".$uploadFile['name'])){
	// 			unlink("../image_50/".$uploadFile['name']);
	// 		}
	// 		if(file_exists("../image_220/".$uploadFile['name'])){
	// 			unlink("../image_220/".$uploadFile['name']);
	// 		}
	// 		if(file_exists("../image_350/".$uploadFile['name'])){
	// 			unlink("../image_350/".$uploadFile['name']);
	// 		}
	// 	}
	// 	$mes="<p>添加失败!</p><a href='addmCompany.php' target='mainFrame'>重新添加</a>";
		
	// }
	return $mes;
}
/**
 *编辑商品
 * @param int $id
 * @return string
 */
function editmCompany($id){
	$arr=$_POST;
	$arr['createTime']=time();
	$path="./uploads";
	$arr['aDesc'] =htmlspecialchars($_POST['aDesc'], ENT_QUOTES);
	var_dump($arr);
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
	$res=update("mind_company",$arr,$where);
	// var_dump($arr);
	
	$pid=$id;
	if($res&&$pid){
		if($uploadFiles &&is_array($uploadFiles)){
			foreach($uploadFiles as $uploadFile){
				$arr1['pid']=$pid;
				$arr1['itype']=2;
				$arr1['albumPath']=$uploadFile['name'];
				addAlbum($arr1);
			}
		}
		$mes="<p>编辑成功!</p><a href='listmCompany.php' target='mainFrame'>查看商品列表</a>";
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
		$mes="<p>编辑失败!</p><a href='listmCompany.php' target='mainFrame'>重新编辑</a>";
		
	}
	return $mes;
}

function delmCompany($id){
	$where="id=$id";
	$res=delete("mind_company",$where);
	$proImgs=getAllImgBymCompanyId($id);
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
		$mes="删除成功!<br/><a href='listmCompany.php' target='mainFrame'>查看商品列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listmCompany.php' target='mainFrame'>重新删除</a>";
	}
	return $mes;
}


/**
 * 得到商品的所有信息
 * @return array
 */
function getAllmCompanyByAdmin(){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from mind_company as p join mind_cate c on p.cId=c.id";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getAllImgBymCompanyId($id){
	$sql="select a.albumPath from mind_album a where itype =2 and pid={$id}";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 *根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getmCompanyImgById($id){
	$sql="select a.albumPath from mind_album a where itype =2 and pid={$id} limit 1";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 * 根据id得到商品的详细信息
 * @param int $id
 * @return arrayptitle | pkey | pdescription | psummary 
 */
function getmCompanyById($id){
		$sql="select id,atitle,akey,adescription,asummary,aName,aSource,aAuthor,aDesc,aHit,createTime,isShow from mind_company  where id={$id}";
		$row=fetchOne($sql);
		return $row;
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkmCompanyExist($cid){
	$sql="select * from mind_company where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到所有商品
 * @return array
 */
function getAllmCompanys(){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from mind_company as p join mind_cate c on p.cId=c.id ";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据cid得到4条产品
 * @param int $cid
 * @return Array
 */
function getmCompanysByCid($cid){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from mind_company as p join mind_cate c on p.cId=c.id where p.cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到下4条产品
 * @param int $cid
 * @return array
 */
function getSmallmCompanysByCid($cid){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from mind_company as p join mind_cate c on p.cId=c.id where p.cId={$cid} limit 4,4";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *得到商品ID和商品名称
 * @return array
 */
function getmCompanyInfo(){
	$sql="select id,pName from mind_company order by id asc";
	$rows=fetchAll($sql);
	return $rows;
}


