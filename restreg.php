<?php 
include_once("classes/userclass.php");
include_once("settings/settings.php");
$obj=new userclass();
// session_start();
// if(isset($_COOKIE['login'])&&($_COOKIE['login'])==1)
// {
//echo "hi";exit;
if(isset($_POST['hide']) AND ($_POST['hide'])=='h')
{
	//echo "hi";exit;
		if(isset($_POST['restname'])AND ($_POST['restname'])!=null)
		{
			if(isset($_POST['address'])AND ($_POST['address'])!=null)
			{
				if(isset($_POST['pin'])AND ($_POST['pin'])!=null)
				{
					if(isset($_POST['dist'])AND ($_POST['dist'])!=null)
					{
						if(isset($_POST['city'])AND ($_POST['city'])!=null)
						{
							if(isset($_POST['no'])AND ($_POST['no'])!=null)
							{
								if(isset($_POST['res'])AND ($_POST['res'])!=null)
							{
								if(isset($_POST['seats'])AND ($_POST['seats'])!=null)
							{
								if(isset($_POST['park'])AND ($_POST['park'])!=null)
							{
								if(isset($_POST['email'])AND ($_POST['email'])!=null)
								{
									if(isset($_POST['pass'])AND ($_POST['pass'])!=null)
									{
										//echo "hiii";exit;
										
										$restname=trim($_POST['restname']);
										$address=trim($_POST['address']);
										$pin=trim($_POST['pin']);
										$dist=trim($_POST['dist']);
										$city=trim($_POST['city']);
										$no=trim($_POST['no']);
										$res=trim($_POST['res']);
										$seats=trim($_POST['seats']);
										$park=trim($_POST['park']);
										$email=trim($_POST['email']);
										$pass=trim($_POST['pass']);
										$obj->insert($restname,$address,$pin,$dist,$city,$no,$res,$seats,$park,$_FILES['img'],$email,$pass);
									}
									else echo "<script>alert('Password mandatory field')</script>";
								}
				           		 else echo "<script>alert('email mandatory field')</script>";
				           		 }
				           		 else echo "<script>alert('parking mandatory field')</script>";
				           		 }
				           		 else echo "<script>alert('reservation mandatory field')</script>";
				           		  }
				           		 else echo "<script>alert('Number of seats mandatory field')</script>";
							}
							else echo "<script>alert('number mandatory field')</script>";
						}
						else echo "<script>alert('city mandatory field')</script>";
					}
					else echo"<script>alert('district mandatory field')</script>";
				}	
				else echo "<script>alert('pin code mandatory field')</script>";
			}
			else echo "<script>alert('address mandatory field')</script>";
		}
		else echo"<script>alert('restaurant name mandatory field')</script>";
	}	

//$smartyObj->display('restheader.tpl');	

//$smartyObj->display('restfooter.tpl');

$smartyObj->display('restreg.tpl');

// else
// {
// 	header("location:loginindex.php");
// }
 ?>