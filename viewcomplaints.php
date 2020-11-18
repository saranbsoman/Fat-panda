<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$key=$_GET['v'];
session_start();
	if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
	{
$s1=$obj->hoteldisp($key);
$smartyObj->assign('view1',$s1);
$s=$obj->viewcomplaints($key);
$smartyObj->assign('view',$s);		
$smartyObj->display('viewcomplaints.tpl');
}
?>