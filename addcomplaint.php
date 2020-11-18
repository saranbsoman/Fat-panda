<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
$f=$_COOKIE['lkey'];
if(isset($_POST["hide"])AND($_POST["hide"])=='h')
{
	if(isset($_POST["com"])AND($_POST["com"])!=null)
	{
		$com=trim($_POST["com"]);
		$obj->addcomment($com,$f);
	}
}		
$smartyObj->display('comments.tpl');
?>