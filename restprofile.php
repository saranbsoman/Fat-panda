<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$key=$_GET['v'];
$s=$obj->hoteldisp($key);
//echo $s;exit;
$smartyObj->assign('view',$s);
$f=$_COOKIE['lkey'];
$s1=$obj->hotelmenuview1($key);
//echo $s1;exit;
$smartyObj->assign('view1',$s1);	
//echo "hello";exit;
if(isset($_POST["hide"])AND($_POST["hide"])=='h')
{//echo "hello";exit;
	if(isset($_POST["mkey"])AND($_POST["mkey"])!=null)
	{//echo "hello";exit;
		if(isset($_POST["qnty"])AND($_POST["qnty"])!=null)
		{
			//echo "hello";exit;
			$qnty=trim($_POST["qnty"]);
			$mkey=trim($_POST["mkey"]);
			$obj->addorder($mkey,$f,$qnty);	
			// $comment=trim($_POST["comment"]);
			// $obj->addcomment($comment,$key,$f);
		}	
	}
}

$smartyObj->display('restprofile.tpl');
}
else
{
	header("location:loginindex.php");
}
?>