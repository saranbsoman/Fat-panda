<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$id=$_COOKIE['lkey'];
$s1=$obj->staffview($id);
$smartyObj->assign('view3',$s1);
$s=$obj->staffmenudisp($id);
$smartyObj->assign('view',$s);

if (isset($_POST['hide']) AND ($_POST['hide'])=='h') {

	if (isset($_POST['add']) AND ($_POST['add']) ) {



		$a=$_POST['add'];
		$obj->addmenu($a,$id);
		# code...
	}
	# code...
}



$smartyObj->display('staffaddmenu.tpl');
}
else
{
	header("location:loginindex.php");
}
?>