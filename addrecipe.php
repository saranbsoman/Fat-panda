<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$fid=$_COOKIE["lkey"];
if(isset($_POST["hide"])AND($_POST["hide"])=="h")
{
	$cat=trim($_POST["cat"]);
	$name=trim($_POST["name"]);
	$amt=trim($_POST["amt"]);
	$det=trim($_POST["det"]);
	$obj->addrecipe($cat,$name,$amt,$det,$_FILES['img'],$fid);	
												
}

//$smartyObj->display('restheader.tpl');
$smartyObj->display('addrecipe.tpl');
//$smartyObj->display('restfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>