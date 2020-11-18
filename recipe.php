<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
	//echo "hi";exit;
	$fid=$_COOKIE["lkey"];
	
	$s1=$obj->restdisp($fid);

	$smartyObj->assign('view',$s1);
	$s=$obj->viewrecipe($fid);	
	$smartyObj->assign('view1',$s);												
	$smartyObj->display('recipe.tpl');

}
else
{
	header("location:loginindex.php");
}
?>