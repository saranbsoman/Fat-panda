<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
//echo "hello";exit;
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{

$id=$_COOKIE['lkey'];
$s=$obj->restimagedisp($id);
$smartyObj->assign('view',$s);

// $s2=$obj->staffview($id);
// $smartyObj->assign('view1',$s1);
// $smartyObj->assign('view2',$s2);
$s1=$obj->restdisp($id);
$smartyObj->assign('view1',$s1);
// $obj->fileupload($_FILES,$id);
//echo "hai";exit;
//$smartyObj->display('userheader.tpl');
$smartyObj->display('restgallery.tpl');
// $smartyObj->display('userfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>