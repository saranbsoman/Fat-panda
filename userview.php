<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
$key=$_COOKIE['lkey'];
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
	if(isset($_POST["hide"])AND($_POST["hide"])=='h')
	{

		if(isset($_POST["search"])AND($_POST["search"])!=null)
		{
			$sh=trim($_POST["search"]);
		 
			//$search="zam zam";
			if($sh!=null)
			{
				$s=$obj->usersearchview($sh);
				$smartyObj->assign('view',$s);
			}
		}	
	}
	
	else
	{
		$s1=$obj->userview();
		$smartyObj->assign('view',$s1);
		$s=$obj->userprofile($key);
		$smartyObj->assign('view3',$s);
		$s2=$obj->restprofileview($key);
		$smartyObj->assign('view2',$s2);
	}
//$smartyObj->display('userheader.tpl');
$smartyObj->display('userview.tpl');
//$smartyObj->display('userfooter.tpl');
}
else
{
	header("location:loginindex.php");
}
?>