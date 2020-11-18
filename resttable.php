<?php 
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
session_start();
//echo "hello";exit;
	
		//echo "hello";exit;
$key=$_COOKIE['lkey'];
//echo $key;exit;
$s=$obj->restdisp($key);
$smartyObj->assign('view',$s);
if(isset($_POST['hide'])AND($_POST['hide']=='h'))
{
	if(isset($_POST['table'])AND($_POST['table'])!=null)
	{
		// if(isset($_POST['pass'])AND($_POST['pass'])!=null)
		// {
			$table=trim($_POST['table']);
			// $pass=trim($_POST['pass']);
			$obj->addtable($table,$key);
	// 	}
	// 	else echo"<script>alert('password field is mandatory')</script>";
	 }
	else echo"<script>alert(' field is mandatory')</script>";
}

$smartyObj->display('resttable.tpl');


?>