<?php 
//require_once '../include.php';
//$sql="select * from imooc_admin";
//$totalRows=getResultNum($sql);
////echo $totalRows;
//$pageSize=2;
////得到总页码数
//$totalPage=ceil($totalRows/$pageSize);
//$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
//if($page<1||$page==null||!is_numeric($page)){
//	$page=1;
//}
//if($page>=$totalPage)$page=$totalPage;
//$offset=($page-1)*$pageSize;
//$sql="select * from imooc_admin limit {$offset},{$pageSize}";
////echo $sql;
//$rows=fetchAll($sql);
////print_r($rows);
//foreach($rows as $row){
//	echo "编号：".$row['id'],"<br/>";
//	echo "管理员的名称:".$row['username'],"<hr/>";
//}
//echo showPage($page,$totalPage);
//echo "<hr/>";
//echo showPage($page,$totalPage,"cid=5&pid=6");
function oldshowPage($page,$totalPage,$where=null,$sep="&nbsp;"){
	$where=($where==null)?null:"&".$where;
	$url = $_SERVER ['PHP_SELF'];
	// var_dump($_SERVER);

	$index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
	$last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
	$prevPage=($page>=1)?$page-1:1;
	$nextPage=($Page>=$totalPage)?$totalPage:$page+1;
	$prev = ($page == 1) ? "上一页" : "<a href='{$url}?page={$prevPage}{$where}'>上一页</a>";
	$next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?page={$nextPage}{$where}'>下一页</a>";
	$str = "共{$totalPage}页&nbsp&nbsp	当前是第{$page}页&nbsp";
	for($i = 1; $i <= $totalPage; $i ++) {
		//当前页无连接
		if ($page == $i) {
			$p .= "[{$i}]";
		} else {
			$p .= "<a href='{$url}?page={$i}{$where}'>[{$i}]</a>";
		}
	}
 	$pageStr=$str.$sep . $index .$sep. $prev.$sep . $p.$sep . $next.$sep . $last;
 	return $pageStr;
}

function showPage($page,$totalPage,$where=null,$sep="&nbsp;"){
	$where=($where==null)?null:"&".$where;
	$url = $_SERVER ['PHP_SELF'];
	// print_r($_SERVER);
	// $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
	// $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
	$prevPage=($page>=1)?$page-1:1;
	$nextPage=($Page>=$totalPage)?$totalPage:$page+1;
	$prev = ($page == 1) ? "<li class='disabled'><a>上一页</a></li>" : "
    <li>
    	<a href='{$url}?page={$prevPage}{$where}' aria-label='Previous'>上一页</a></li>";
    	$next = ($page == $totalPage) ? "<li class='disabled'><a>下一页</a></li>" : "<li><a href='{$url}?page={$nextPage}{$where}'>下一页</a>
    </li>
  ";
	
	if($totalPage >= 9){
		$Pagenum = 9 ;
	}else{
		$Pagenum = $totalPage;
	}

	for($i = 1; $i <= $Pagenum; $i ++) {
		//当前页无连接
		if ($page == $i) {
			$p .= "<li class='active'><a>{$i}</a></li>";
		} else {
			$p .= "<li><a href='{$url}?page={$i}{$where}'>{$i}</a></li>";
		}
	}
 	$pageStr=$prev.$p.$next ;
 	return $pageStr;
}
function showProductPage($page,$totalPage,$id = 0,$where=null,$sep="&nbsp;"){
	$where=($where==null)?null:"&".$where;
	$url = $_SERVER ['PHP_SELF'];
	// print_r($_SERVER);
	// $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
	// $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
	print_r(!$id);
	if($id){
		$newurl = $url.'?'.'id='.$id.'&';
	}else{
		$newurl = $url.'?';
	}

	$prevPage=($page>=1)?$page-1:1;
	$nextPage=($Page>=$totalPage)?$totalPage:$page+1;
	$prev = ($page == 1) ? "<li class='disabled'><a>上一页</a></li>" : "
    <li>
    	<a href='{$newurl}page={$prevPage}{$where}' aria-label='Previous'>上一页</a></li>";
    	$next = ($page == $totalPage) ? "<li class='disabled'><a>下一页</a></li>" : "<li><a href='{$newurl}page={$nextPage}{$where}'>下一页</a>
    </li>
  ";
	
	if($totalPage >= 9){
		$Pagenum = 9 ;
	}else{
		$Pagenum = $totalPage;
	}

	for($i = 1; $i <= $Pagenum; $i ++) {
		//当前页无连接
		if ($page == $i) {
			$p .= "<li class='active'><a>{$i}</a></li>";
		} else {
			$p .= "<li><a href='{$newurl}page={$i}{$where}'>{$i}</a></li>";
		}
	}
 	$pageStr=$prev.$p.$next ;
 	return $pageStr;
}

function showProductPreNextPage($page,$totalPage,$id = 0,$where=null,$sep="&nbsp;"){
	$where=($where==null)?null:"&".$where;
	$url = $_SERVER ['PHP_SELF'];
	// print_r($_SERVER);
	// $index = ($page == 1) ? "首页" : "<a href='{$url}?page=1{$where}'>首页</a>";
	// $last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?page={$totalPage}{$where}'>尾页</a>";
	print_r(!$id);
	if($id){
		$newurl = $url.'?'.'id='.$id.'&';
	}else{
		$newurl = $url.'?';
	}

	$prevPage=($page>=1)?$page-1:1;
	$nextPage=($Page>=$totalPage)?$totalPage:$page+1;
	$prev = ($page == 1) ? "<li class='disabled'><a>上一页</a></li>" : "
    <li>
    	<a href='{$newurl}page={$prevPage}{$where}' aria-label='Previous'>上一页</a></li>";
    	$next = ($page == $totalPage) ? "<li class='disabled'><a>下一页</a></li>" : "<li><a href='{$newurl}page={$nextPage}{$where}'>下一页</a>
    </li>
  ";
	
	if($totalPage >= 9){
		$Pagenum = 9 ;
	}else{
		$Pagenum = $totalPage;
	}

	for($i = 1; $i <= $Pagenum; $i ++) {
		//当前页无连接
		if ($page == $i) {
			$p .= "<li class='active'><a>{$i}</a></li>";
		} else {
			$p .= "<li><a href='{$newurl}page={$i}{$where}'>{$i}</a></li>";
		}
	}
 	$pageStr=$prev.$p.$next ;
 	return $pageStr;
}
