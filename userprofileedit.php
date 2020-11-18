<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();

session_start();

if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{

   
$key=$_COOKIE['lkey'];
$s=$obj->userprofile($key);	
$smartyObj->assign("view",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=="h")
{ //echo "hi";exit;
	if(isset($_POST['name'])AND($_POST['name'])!=null)
	{
		if(isset($_POST['no'])AND($_POST['no'])!=null)
		{
			if(isset($_POST['pin'])AND($_POST['pin'])!=null)
			{
				if(isset($_POST['gender'])AND($_POST['gender'])!=null)
				{
					$name=trim($_POST['name']);
					$no=trim($_POST['no']);
					$pin=trim($_POST['pin']);
					$gender=trim($_POST['gender']);
					$s=$obj->userprofileedit($name,$no,$pin,$gender,$_FILES['img'],$key);
					$smartyObj->assign("view",$s);
				}
				else echo"<script>alert('password field is mandatory')</script>";
			}
			else echo"<script>alert('password field is mandatory')</script>";
		}
	}
}
$smartyObj->display('userprofileedit.tpl');
}
else
{
	header("location:loginindex.php");
}
?>