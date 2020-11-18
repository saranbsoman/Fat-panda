n<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$id=$_COOKIE['lkey'];
//echo $id;exit;
$s=$obj->staffmenudisp($id);
$smartyObj->assign('view',$s);
$s1=$obj->staffview($id);
$smartyObj->assign('view3',$s1);
$smartyObj->display('staffview.tpl');
}
else
{
	header("location:loginindex.php");
}
?>