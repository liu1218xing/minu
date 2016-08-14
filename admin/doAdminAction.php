<?php 
require_once '../include.php';
checkLogined();
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
if($act=="logout"){
	logout();
}elseif($act=="addAdmin"){
	$mes=addAdmin();
}elseif($act=="editAdmin"){
	$mes=editAdmin($id);
}elseif($act=="delAdmin"){
	$mes=delAdmin($id);
}elseif($act=="addCate"){
	$mes=addCate();
}elseif($act=="editCate"){
	$where="id={$id}";
	$mes=editCate($where);
}elseif($act=="delCate"){
	$mes=delCate($id);
}elseif($act=="addPro"){
	$mes=addPro();
}elseif ($act=="addmProduct") {
		$mes=addmProduct();
}elseif ($act=="editmProduct") {
	$mes=editmProduct($id);
}elseif($act=="addmcate"){
	$mes=addmCate();
}elseif ($act=="editmCate") {
	$where="id={$id}";
	$mes=editmCate($where);
}elseif ($act =="delmCate") {
	$mes =delmCate($id);
}
elseif($act=="editPro"){
	$mes=editPro($id);
}elseif($act=="delPro"){
	$mes=delPro($id);
}elseif ($act=="delmProduct") {
	$mes=delmProduct($id);
}
elseif($act=="addUser"){
	$mes=addUser();
}elseif($act=="delUser"){
		$mes=delUser($id);
}elseif($act=="editUser"){
	$mes=editUser($id);	
}elseif($act=="waterText"){
	$mes=doWaterText($id);
}elseif($act=="waterPic"){
	$mes=doWaterPic($id);
}elseif ($act =="addmCompany") {
	$mes =addmCompany();
}elseif ($act=="editmCompany") {
	$mes =editmCompany($id);
}elseif ($act =="delmCompany") {
	$mes =delmCompany($id);
}elseif ($act =="addmCase") {
	$mes =addmCase();
}elseif ($act=="editmCase") {
	$mes =editmCase($id);
}elseif ($act =="delmCase") {
	$mes =delmCase($id);
}elseif ($act =="addmArticle") {
	$mes =addmArticle();
}elseif ($act=="editmArticle") {
	$mes =editmArticle($id);
}elseif ($act =="delmArticle") {
	$mes =delmArticle($id);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
	if($mes){
		echo $mes;
	}
?>
</body>
</html>