<?php 
/**
 * 添加商品
 * @return string
 */
function addmProduct(){
	$arr=$_POST;
	$arr['pubTime']=time();
	$path="./uploads";
	$arr['pDesc'] =htmlspecialchars($_POST['pDesc'], ENT_QUOTES);
	// print_r($arr['pDesc']);
	// alert($arr['pDesc']);
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
	$res=insert("product",$arr);
	$pid=getInsertId();
	if($res&&$pid){
		foreach($uploadFiles as $uploadFile){
			$arr1['pid']=$pid;
			$arr1['itype']=2;
			$arr1['albumPath']=$uploadFile['name'];
			addAlbum($arr1);
		}
		$mes="<p>添加成功!</p><a href='addmProduct.php' target='mainFrame'>继续添加</a>|<a href='listmProduct.php' target='mainFrame'>查看商品列表</a>";
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
		$mes="<p>添加失败!</p><a href='addmProduct.php' target='mainFrame'>重新添加</a>";
		
	}
	return $mes;
}
/**
 *编辑商品
 * @param int $id
 * @return string
 */
function editmProduct($id){
	$arr=$_POST;
	$arr['pubTime']=time();
	$arr['pDesc'] =htmlspecialchars($_POST['pDesc'], ENT_QUOTES);
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
	$res=update("product",$arr,$where);
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
		$mes="<p>编辑成功!</p><a href='listmProduct.php' target='mainFrame'>查看商品列表</a>";
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
		$mes="<p>编辑失败!</p><a href='listmProduct.php' target='mainFrame'>重新编辑</a>";
		
	}
	return $mes;
}

function delmProduct($id){
	$where="id=$id";
	$res=delete("product",$where);
	$proImgs=getAllImgBymProductId($id);
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
		$mes="删除成功!<br/><a href='listmProduct.php' target='mainFrame'>查看商品列表</a>";
	}else{
		$mes="删除失败!<br/><a href='listmProduct.php' target='mainFrame'>重新删除</a>";
	}
	return $mes;
}


/**
 * 得到商品的所有信息
 * @return array
 */
function getAllmProductByAdmin(){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from product as p join mind_cate c on p.cId=c.id";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getAllImgBymProductId($id){
	$sql="select a.albumPath from mind_album a where itype =2 and pid={$id}";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 *根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getmProductImgById($id){
	$sql="select a.albumPath from mind_album a where itype =2 and pid={$id} limit 1";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 * 根据id得到商品的详细信息
 * @param int $id
 * @return arrayptitle | pkey | pdescription | psummary 
 */
function getmProductById($id){
		$sql="select p.id,p.pName,p.ptitle,p.pkey,p.pdescription,p.psummary,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from product as p join mind_cate c on p.cId=c.id where p.id={$id}";
		$row=fetchOne($sql);
		return $row;
}
/**
 * 检查分类下是否有产品
 * @param int $cid
 * @return array
 */
function checkmProductExist($cid){
	$sql="select * from product where cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到所有商品
 * @return array
 */
function getAllmProducts(){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from product as p join mind_cate c on p.cId=c.id ";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *根据cid得到4条产品
 * @param int $cid
 * @return Array
 */
function getmProductsByCid($cid){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from product as p join mind_cate c on p.cId=c.id where p.cId={$cid}";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 * 得到下4条产品
 * @param int $cid
 * @return array
 */
function getSmallmProductsByCid($cid){
	$sql="select p.id,p.pName,p.pSn,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from product as p join mind_cate c on p.cId=c.id where p.cId={$cid} limit 4,4";
	$rows=fetchAll($sql);
	return $rows;
}

/**
 *得到商品ID和商品名称
 * @return array
 */
function getmProductInfo(){
	$sql="select id,pName from product order by id asc";
	$rows=fetchAll($sql);
	return $rows;
}



/**
 *得到商品ID和商品名称
 * @return array
 */
function getProInfo(){
	$sql="select id,pName from product order by id asc";
	$rows=fetchAll($sql);
	// var_dump($rows);
	return $rows;
}