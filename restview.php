<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
//echo "hello";exit;
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{

$id=$_COOKIE['lkey'];
$s=$obj->restprofileview($id);
$s1=$obj->hotelmenudisp($id);
$s2=$obj->reststaffview($id);
$smartyObj->assign('view1',$s1);
$smartyObj->assign('view2',$s2);
$smartyObj->assign('view',$s);
// $obj->fileupload($_FILES,$id);
//echo "hai";exit;
//$smartyObj->display('userheader.tpl');
$smartyObj->display('restview.tpl');
// $smartyObj->display('userfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>