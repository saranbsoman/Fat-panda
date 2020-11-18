<?php
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
{
$key=$_GET['v'];
$s=$obj->selectmenu($key);
$smartyObj->assign('update',$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['cat'])AND($_POST['cat'])!=null)
	{
		if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			if(isset($_POST['amt'])AND($_POST['amt'])!=null)
			{
				if(isset($_POST['det'])AND($_POST['det'])!=null)
				{
					if(isset($_POST['img'])AND($_POST['img'])!=null)
				{
					$cat=($_POST['cat']);
					$name=($_POST['name']);
					$amt=($_POST['amt']);
					$det=($_POST['det']);
					$obj->updatemenu($key,$cat,$name,$det,$_FILES['img'],$amt);

				}
				else
				echo "<script>alert('image field is mandatory')</script>";	
				}
				else
				echo "<script>alert('detail field is mandatory')</script>";
				
			}
			else
			echo "<script>alert('amount field is mandatory')</script>";

		}
		else
		echo "<script>alert('name field is mandatory')</script>";

	}
	else
	echo "<script>alert('category field is mandatory')</script>";
}
$smartyObj->display('menuedit.tpl');
}
else
{
	header("location:loginindex.php");
}
?>