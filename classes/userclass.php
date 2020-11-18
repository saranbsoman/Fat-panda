<?php
class userclass
{
	function insert($restname,$address,$pin,$dist,$city,$no,$res,$seats,$park,$file=null,$email,$pass)
	{
		$dup=checkdup("login","email",$email);
		if($dup==1)
		{
			echo"<script>alert('Email already exits')</script>";
		}
		/*
		echo $regno;
		echo $restname;
		echo $address;
		echo $pin;
		echo $dist;
		exit;
		*/
		else
		{	
		$pass=md5($pass);
		$key1=uniquekey("login","lkey");
		$qry1="insert into login (lkey,email,password,usertype)values('".$key1."','".$email."','".$pass."','1')";
		$f=mysql_query($qry1);
		$fid=keytoid("login","lkey",$key1);

		$key=uniquekey("restreg","rrkey");
		$path="hotelimages/".$key;
		mkdir($path);
		//echo $path;exit;
		$qry="insert into restreg (rrkey,restname,address,pincode,district,city,contactno,reservation,seats,parking,tables,image,fid)values('".$key."','".$restname."','".$address."','".$pin."','".$dist."','".$city."','".$no."','".$res."','".$seats."','".$park."',0,'".$file['name']."','".$fid."')";
		//echo $qry; exit;
		$e=mysql_query($qry);
		if($e && $f)
		{
			echo"<script>alert('successful')</script>";
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			header('location:restfileupload.php');

		}
		else echo"<script>alert('unsuccessful')</script>";
		}

	}
	function addtable($table,$key)
	{
		$id=keytoid("login","lkey",$key);
		$qry="update restreg set tables='".$table."' where fid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		if($e)
		{
			echo "<script>alert('successful')</script>";
			header('location:restview.php');
		}
	}
	function login($mail,$pass)
	{

		$p=md5($pass);
		$qry="select lkey, status, usertype from login where email='".$mail."' and password='".$p."'";
		$e=mysql_query($qry);
		$c=0;
		while($r=mysql_fetch_array($e))	
		{
			$key=$r['lkey'];
			$stat=$r['status'];//approval or rejected status
			$usertype=$r['usertype'];
			$c=1;
		}	
		if($c>0)
		{
			
			if($stat==1)//checking approval
			{
				setcookie("lkey",$key);
				setcookie("login",1);
				if($usertype==0)
				{
					header('location:adminview.php');
				}
				elseif ($usertype==1)
				{
						header('location:restview.php');# code...
				}
				elseif ($usertype==3)
				{
						header('location:staffview.php');# code...
				}
				else header('location:userview.php');
			}
			else
			{
				echo "<script>alert('waiting for approval or rejected')</script>";
			}
		}	
		else
		{
			echo"<script>alert('Incorrect username or password')</script>"; 

		} 
	}
	function userreg($name,$no,$pin,$gender,$file=null,$mail,$pass)
	{
		$dup=checkdup("login","email",$mail);
		if($dup==1)
		{
			echo"<script>alert('Email already exits')</script>";
		}
		$pass=md5($pass);
		$key1=uniquekey("login","lkey");
		$dup=checkdup("login","email",$mail);
		if($dup==0)
		{
			//echo $key1;exit;
			$qry1="insert into login(lkey,email,password,status,usertype)values('".$key1."','".$mail."','".$pass."','1','2')";//value 1 because user doesnot need a ststus
			//echo $qry1;exit;
			$e=mysql_query($qry1);
		}
		else
		{
			echo "<script>alert('email already exists')</script>";
		}
		
		//echo $fid;exit;
		$key2=uniquekey("userreg","ukey");
		$fid=keytoid("login","lkey",$key1);
		//echo $fid;exit;
		$path="userimage/".$key1;
		mkdir($path);
		$qry2="insert into userreg(ukey,name,no,pin,gender,image,fid)values('".$key2."','".$name."','".$no."','".$pin."','".$gender."','".$file['name']."','".$fid."')";
		$f=mysql_query($qry2);
		//echo $qry2;exit;
		if($f)
		{
			
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			echo "<script>alert('successful')</script>";
			header('location:index.php');
		}
		else echo "<script>alert('unsuccessful')</script>";
	}
	function staffreg($name,$add,$hid,$no,$gender,$age,$file=null,$mail,$pass)
	{
		$dup=checkdup("login","email",$mail);
		if($dup==1)
		{
			echo"<script>alert('Email already exits')</script>";
		}
		$pass=md5($pass);
		$key1=uniquekey("login","lkey");
		$dup=checkdup("login","email",$mail);
		if($dup==0)
		{
			//echo $key1;exit;
			$qry1="insert into login(lkey,email,password,status,usertype)values('".$key1."','".$mail."','".$pass."','1','3')";//value 1 because user doesnot need a ststus
			//echo $qry1;exit;
			$e=mysql_query($qry1);
		
		
			//echo $fid;exit;
			$key2=uniquekey("staffreg","skey");
			$fid=keytoid("login","lkey",$key1);
			//echo $fid;exit;
			$path="staffimages/".$key2;
			mkdir($path);
			$qry2="insert into staffreg(skey,name,address,hotelid,no,gender,age,image,fid)values('".$key2."','".$name."','".$add."','".$hid."','".$no."','".$gender."','".$age."','".$file['name']."','".$fid."')";
			$f=mysql_query($qry2);
			//echo $qry2;exit;
			if($e && $f)
			{
				echo "<script>alert('successful')</script>";
				move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
				header('location:reststaff.php');
			}
			else echo "<script>alert('unsuccessful')</script>";
		}
		else
		{
			echo "<script>alert('email already exists')</script>";
		}
	}
	function addcomment($comment,$hid,$f)
	{
		$kid=keytoid("restreg","rrkey",$hid);
		$key=uniquekey("comments","ckey");
		$uid=keytoid("login","lkey",$f);
		$d=date('Y-m-d');
		$qry="insert into comments(ckey,userid,hotelid,comments,date)values('".$key."','".$uid."','".$kid."','".$comment."','".$d."')";
		//echo $qry;exit;
		$e=mysql_query($qry);
		if($e)
		{
			echo "<script>alert('successful')</script>";
		}
	}
	function requestview()
	{
		$qry="select * from restreg r, login l where r.fid=l.id and l.status='0'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="hotelimages/".$r['rrkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function restdisp($key)
	{
		$id=keytoid("login","lkey",$key);
		$qry="select * from restreg where fid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="hotelimages/".$r['rrkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function approve($id)
	{
		$id=keytoid("login","lkey",$id);
		$qry="update login set status='1' where id='".$id."'";
		//echo $id;exit;
		$e=mysql_query($qry);
		if($e)
		{
			header('location:adminview.php');
		}
	}
	function reject($id)
	{
		$id=keytoid("login","lkey",$id);
		$qry="update login set status='2' where id='".$id."'";
		//echo $id;exit;
		$e=mysql_query($qry);
		if($e)
		{
			header('location:adminview.php');
		}	
	}
	function userview()
	{
		$qry="select * from restreg r, login l where r.fid=l.id and l.status='1'";
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="hotelimages/".$r['rrkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;

		}
		return $arr;
	}
	function usercomplaintview($k)
	{
		$id=keytoid("login","lkey",$k);
		$qry="select * from complaint inner join restreg on restreg.id=complaint.restid where loginid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			
			$arr[]=$r;

		}
		return $arr;
	}
	function usersearchview($name)
	{
		$qry="select * from restreg r, login l where r.fid=l.id and l.status='1' and restname='".$name."'" ;
		$e=mysql_query($qry);
		$arr=array();
		if($e)
		{


			while($r=mysql_fetch_array($e))
			{
				$path="hotelimages/".$r['rrkey']."/".$r["image"];
				$r['image']=$path;
				$arr[]=$r;
			}
		return $arr;
		}
		else
		{
			echo "<script>alert('No search results')</script>";
		}

	}
	function rejectedview()
	{
		$qry="select * from restreg r, login l where r.fid=l.id and l.status='2'";
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="hotelimages/".$r['rrkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		}
		return $arr;
	}
	function adminview()
	{
		$qry="select * from restreg r, login l where r.fid=l.id and l.status='0'";
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="hotelimages/".$r['rrkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		}
		return $arr;
	}
	function hoteldisp($key)
	{
		//echo $key;exit;
		$id=keytoid("restreg","rrkey",$key);
		//echo $id;exit;
		$qry="select * from restreg where id='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="hotelimages/".$r['rrkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function fileupload($arr,$fid)
	{
		$id=keytoid("login","lkey",$fid);
		$key=uniquekey("restfile","fkey");
		
        $qry="insert into restfile (fkey,fid)values('".$key."','".$id."')";
        $e=mysql_query($qry);
        //echo $qry;exit;
        //$xx=count($arr);
       $num=1; 
        $phtoname="upload/".$key;
        mkdir($phtoname);
       foreach($arr as $aa)
    {
		
		$query="update restfile set image".$num."='".$aa['name']."' where fkey='".$key."'";
     // echo $query;exit;
      $res=mysql_query($query);//echo $qry; exit;
		
		if($res)
      {
          move_uploaded_file($aa["tmp_name"],$phtoname."/".$aa["name"]);
      }
        $num++;
    }
		if($e)
		{
			echo"<script>alert('successful')</script>";
			header('location:index.php');

		}
		else echo"<script>alert('unsuccessful')</script>";

	}
	function restimageupload($arr,$fid)
	{
		$id=keytoid("login","lkey",$fid);
		$key=uniquekey("restimages","imgkey");
		
        $qry="insert into restimages (imgkey,loginid)values('".$key."','".$id."')";
        //echo $qry;exit;
        $e=mysql_query($qry);
        //$xx=count($arr);
       $num=1; 
        $phtoname="restimages/".$key;
        mkdir($phtoname);
       foreach($arr as $aa)
    {
		
		$query="update restimages set img".$num."='".$aa['name']."' where imgkey='".$key."'";
     // echo "$query";exit;
      $res=mysql_query($query);//echo $qry; exit;
		
		if($res)
      {
          move_uploaded_file($aa["tmp_name"],$phtoname."/".$aa["name"]);
      }
        $num++;
    }
		if($e)
		{
			echo"<script>alert('successful')</script>";
			header('location:index.php');

		}
		else echo"<script>alert('unsuccessful')</script>";

	}
	function restimagedisp($k)
	{
		
		//echo $k;exit;
		$key=keytoid("login","lkey",$k);
		$qry="select * from restimages where loginid='".$key."' ";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$ar=array();
		while($rr=mysql_fetch_array($e))
		{
			$path1="restimages/".$rr['imgkey']."/".$rr["img1"];
			$path2="restimages/".$rr['imgkey']."/".$rr["img2"];
			$path3="restimages/".$rr['imgkey']."/".$rr["img3"];
			$path4="restimages/".$rr['imgkey']."/".$rr["img4"];
			$path5="restimages/".$rr['imgkey']."/".$rr["img5"];
			$path6="restimages/".$rr['imgkey']."/".$rr["img6"];
			$path7="restimages/".$rr['imgkey']."/".$rr["img7"];
			$path8="restimages/".$rr['imgkey']."/".$rr["img8"];
			$path9="restimages/".$rr['imgkey']."/".$rr["img9"];
			$path10="restimages/".$rr['imgkey']."/".$rr["img10"];

			
			$rr['path1']=$path1;
		    $rr['path2']=$path2;
		    $rr['path3']=$path3;
		    $rr['path4']=$path4;
		    $rr['path5']=$path5;
		    $rr['path6']=$path6;
		    $rr['path7']=$path7;
		    $rr['path8']=$path8;
		    $rr['path9']=$path9;
		    $rr['path10']=$path10;
		
			$ar[]=$rr;
		//echo $arr;exit;
		}
		//echo $arr;exit;
		//print_r($ar);exit;
		return $ar;
	}
      
      
	function filedisp($k)
	{
		
		//echo $k;exit;
		$id=keytoid("restreg","rrkey",$k);
		$q="select fid from restreg where id='".$id."'";
		$ee=mysql_query($q);
		$key=null;
		while($r=mysql_fetch_array($ee))
		{
			$key=$r['fid'];
		}
		$qry="select * from restfile where fid='".$key."' ";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$ar=array();
		while($rr=mysql_fetch_array($e))
		{
			$path="upload/".$rr['fkey']."/".$rr["image1"];
			$path1="upload/".$rr['fkey']."/".$rr["image2"];
			$path2="upload/".$rr['fkey']."/".$rr["image3"];
			$path3="upload/".$rr['fkey']."/".$rr["image4"];
			$path4="upload/".$rr['fkey']."/".$rr["image5"];
			$rr['path']=$path;
			$rr['path1']=$path1;
		    $rr['path2']=$path2;
		    $rr['path3']=$path3;
		    $rr['path4']=$path4;
			$ar[]=$rr;
		//echo $arr;exit;
		}
		//print_r($ar);exit;
		//echo $arr;exit;
		return $ar;
	}


	// function menuaddstaff($name,$pid)
	// {
	// 	$jj=keytoid("login")
	// //print_r($name);exit;
	// 	$chk="";
	// 	foreach ($name as $chk1) 
	// 	{
	// 		$chk .=$chk1.",";
	// 		//$chk=explode("",$chk1);
	// 	}

	// 	$trim=rtrim($chk,",");
	// 	$explode=explode(",",$trim);
	// 	foreach ($explode as $staffid) 
	// 	{
	// 	$id=uniquekey("dutyallotstaff","dutyallotkey");
	// 	$da=date('Y-m-d');
	// 	$qry="insert into dutyallotstaff(dutyallotkey,staffid,packageid,currentdate)values('".$id."','".$staffid."','".$pid."','".$da."')";
	// 	//echo $qry;exit;
	// 	$ex=mysql_query($qry);
	// 	$qry1="update staffreg set dutyalotstatus='1' where staffid='".$staffid."'";
	// 	$ex1=mysql_query($qry1);
	// 	}
	// 	if($ex AND $ex1)
	// 	{
	// 		echo "<script>alert('Successfully Alotted')</script>";
	// 	}
	// 	else
	// 	{
	// 		echo "<script>alert('Staff Allotting Unsuccessfull')</script>";
	// 	}
	// }





	function addmenu($name,$fid)
	{
		//$key=uniquekey("menu","mkey");
		$id=keytoid("login","lkey",$fid);

	


		$q1="select hotelid from staffreg where fid='".$id."'";
		$e1=mysql_query($q1);
		//echo $q1;exit;
		$hid=null;
		while($r=mysql_fetch_array($e1))
		{
			$hid=$r['hotelid'];
		}


		$chk="";
		foreach ($name as $chk1) 
		{
			$chk .=$chk1.",";
			//$chk=explode("",$chk1);
		}

		$trim=rtrim($chk,",");
		$explode=explode(",",$trim);
		foreach ($explode as $menu) 
		{

			$key=uniquekey("menu","mkey");
		//$id=keytoid("login","lkey",$fid);


        $qry="insert into menu (mkey,recipe_id,fid,hotelid)values('".$key."','".$menu."','".$id."','".$hid."')";
        $e=mysql_query($qry);
    }
        //echo $qry;exit;
        if($e)
		{
			echo"<script>alert('successful')</script>";
			

		}
		else echo"<script>alert('unsuccessful')</script>";

	}
	function staffmenuadd($rkey)
	{
		//echo $rkey;exit;
		$qry1="select * from recipe where rkey='".$rkey."'";
		//echo $qry1;exit;
		$e1=mysql_query($qry1);
		$cat=null;
		$name=null;
		$amt=null;
		$det=null;
		$file=null;
		$id=null;
		while($r=mysql_fetch_array($e1))
		{
			$file['name']=$r["image"];

			$path="recipeimage/".$r['rkey']."/".$r["image"];
			//echo $path;exit;
			$r['image']=$path;
			//echo $r['name'];exit;
			$cat=$r['category'];
			$name=$r['name'];
			$amt=$r['amount'];
			$det=$r['details'];
			
			$id=$r['hotelid'];
		}
		//echo $arr[3];exit;
		$key=uniquekey("menu","mkey");
		// $id=keytoid("login","lkey",$fid);
		$path="menuimage/".$key;
		mkdir($path);
        $qry="insert into menu (mkey,category,name,amount,details,image,fid)values('".$key."','".$cat."','".$name."','".$amt."','".$det."','".$file['name']."','".$id."')";
        //echo $qry;exit;
        $e=mysql_query($qry);
        //echo $qry;exit;
        if($e)
		{
			echo"<script>alert('successful')</script>";
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			//echo $m;exit;
			//header('location:login.php');

		}
		else echo"<script>alert('unsuccessful')</script>";

	}
	function hotelmenudisp($fid)
	{
		//echo $fid;exit;
		$id=keytoid("login","lkey",$fid);
		//echo $id;exit;
		//$key=uniquekey("menu","mkey");
		$qry1="select fid from restreg where fid='".$id."'";
		$e1=mysql_query($qry1);// inner join staffreg on menu.fid=staffreg.fid where hotelname='".$id."'";
		//echo $qry1;exit;
		$fid1=null;
		while($r=mysql_fetch_array($e1))
		{
			$fid1=$r['fid'];
		}
		//echo $fid1;exit;
		$qry2="select * from recipe where hotelid='".$fid1."'";
		$e2=mysql_query($qry2);
		//echo $qry2;exit;
		// $fid2=null;
		// $a=null;
		// while($r1=mysql_fetch_array($e2))
		// {
		// 	$fid2=$r1['fid'];
		// 	$a=$r1['name'];
		// }
		// //echo $fid2;exit;
		// $qry="select * from recipe where fid='".$fid2."'";
		// $e=mysql_query($qry);
		$arr=array();
		//echo $qry;exit;
		while($r=mysql_fetch_array($e2))
		{
			$path="recipeimage/".$r['rkey']."/".$r["image"];
			//echo $path;exit;
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		return $arr;
	}
	function hotelmenuview($fid)
	{
		//echo $fid;exit;
		$id=keytoid("restreg","rrkey",$fid);
		//echo $id;exit;
		//$key=uniquekey("menu","mkey");
		$qry1="select fid from restreg where id='".$id."'";
		$e1=mysql_query($qry1);// inner join staffreg on menu.fid=staffreg.fid where hotelname='".$id."'";
		//echo $qry1;exit;
		$fid1=null;
		while($r=mysql_fetch_array($e1))
		{
			$fid1=$r['fid'];
		}
		//echo $fid1;exit;
		$qry2="select * from recipe where hotelid='".$fid1."'";
		$e2=mysql_query($qry2);
		//echo $qry2;exit;
		// $fid2=null;
		// $a=null;
		// while($r1=mysql_fetch_array($e2))
		// {
		// 	$fid2=$r1['fid'];
		// 	$a=$r1['name'];
		// }
		// //echo $fid2;exit;
		// $qry="select hotelid from menu where fid='".$fid2."'";
		// $e=mysql_query($qry);
		// $hid=null;
		// while($r=mysql_fetch_array($e))
		// {
		// 	$hid-=$r['hotelid'];	
		// }
		//$qq="select * from recipe"
		$arr=array();
		//echo $qry;exit;
		while($r=mysql_fetch_array($e2))
		{
			$path="recipeimage/".$r['rkey']."/".$r["image"];
			//echo $path;exit;
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r ($arr);exit;
		return $arr;
	}
	function hotelmenuview1($fid)
	{
		//echo $fid;exit;
		$id=keytoid("restreg","rrkey",$fid);
		//echo $id;exit;
		//$key=uniquekey("menu","mkey");
		$qry1="select fid from restreg where id='".$id."'";
		$e1=mysql_query($qry1);// inner join menu on menu.fid=staffreg.fid where hotelname='".$id."'";
		//echo $qry1;exit;
		$fid1=null;
		while($r=mysql_fetch_array($e1))
		{
			$fid1=$r['fid'];
		}
		//echo $fid1;exit;
		$qry2="select * from menu inner join recipe on menu.recipe_id=recipe.id where menu.hotelid='".$fid1."'";
		$e2=mysql_query($qry2);
		//echo $qry2;exit;
		// $rid=array();
		// while($r=mysql_fetch_array($e2))
		// {
		// 	$rid[]=$r;
		// }
		// $qry3="select * from recipe where id='".$rid."'";
		// $e3=mysql_query($qry3);
		// echo $qry3;exit;
		// print_r($rid);exit;
		// $fid2=null;
		// $a=null;
		// while($r1=mysql_fetch_array($e2))
		// {
		// 	$fid2=$r1['fid'];
		// 	$a=$r1['name'];
		// }
		// //echo $fid2;exit;
		// $qry="select hotelid from menu where fid='".$fid2."'";
		// $e=mysql_query($qry);
		// $hid=null;
		// while($r=mysql_fetch_array($e))
		// {
		// 	$hid-=$r['hotelid'];	
		// }
		//$qq="select * from recipe"
		$arr=array();
		//echo $qry;exit;
		while($r=mysql_fetch_array($e2))
		{
			$path="recipeimage/".$r['rkey']."/".$r["image"];
			//echo $path;exit;
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r ($arr);exit;
		return $arr;
	}
	function staffmenudisp($fid)
	{
		$id=keytoid("login","lkey",$fid);
		$qry="select * from staffreg where fid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$hotelid=null;
		while($r=mysql_fetch_array($e))
		{
			$hotelid=$r['hotelid'];
		}
		//echo $hotelid;exit;
		$qry1="select * from recipe where hotelid='".$hotelid."'";
		//echo $qry1;exit;
		$e=mysql_query($qry1);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="recipeimage/".$r['rkey']."/".$r["image"];
			//echo $path;exit;
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		return $arr;
	}
	function staffview($id)
	{
		//echo $id;exit;
		$id=keytoid("login","lkey",$id);
		//echo $id;exit;
		//echo "helo";exit;
		$qry="select * from staffreg where fid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="staffimages/".$r['skey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function reststaffview($id)
	{
		//echo $id;exit;
		$id=keytoid("login","lkey",$id);
		//echo $id;exit;
		//echo "helo";exit;
		$qry="select * from staffreg where hotelid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="staffimages/".$r['skey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function staff()
	{
		//$id=keytoid("login","lkey",$id);
		//echo $id;exit;
		$qry="select * from staffreg";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="staffimages/".$r['skey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function selectmenu($key)
	{
		//echo $key;exit;
		$id=keytoid("menu","mkey",$key);
		//echo $id;exit;
		$qry="select * from menu where id='".$id."'";
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="menuimage/".$r['mkey']."/".$r["image"];
			$r['image']=$path;

			$arr[]=$r;
		//echo $arr;exit;
		}
		return $arr;
	}
	function updatemenu($key,$cat,$name,$det,$amt)
	{
		$id=keytoid("menu","mkey",$key);
		$qry="update menu set category='".$cat."',name='".$name."',amount='".$amt."',details='".$det."' where id='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		if($e)
		{
			echo "<script>alert('update successful')</script>";
		}
	}
	function deletemenu($key)
	{
		//echo $key;exit;
		$id=keytoid("menu","mkey",$key);
		//echo $id;exit;
		$qry1="delete from menu where id='".$id."'";
		$f=mysql_query($qry1);
		header("location:hotelmenuview.php");
	}
	function deactivate($key)
	{
		$id=keytoid("login","lkey",$key);
		$qry1="select usertype from login where id='".$id."'";
		$e=mysql_query($qry1);
		$arr=null;
		while($r=mysql_fetch_array($e))
		{
			$arr=$r['usertype'];
		//echo $arr;exit;
		}
		if($arr==1)
		{
			$qry2="delete from restreg where id='".$id."'";
			if($qry2)
			{
				echo "<script>alert('Account Deativated')</script>";
			}
			//echo $qry2;exit;
		}
		elseif($arr==2)
		{
			$qry2="delete from userreg where id='".$id."'";
			if($qry2)
			{
				echo "<script>alert('Account Deativated')</script>";
			}
			//echo $qry2;exit;
		}
		else
		{
			$qry2="delete from staffreg where id='".$id."'";
			if($qry2)
			{
				echo "<script>alert('Account Deativated')</script>";
			}
			//echo $qry2;exit;
		}
		
	}

	function count()
	{
		$qry="select count(id) from login where status='0' and usertype='1'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=null;
		while($r=mysql_fetch_array($e))
		{
			$arr=$r['count(id)'];
		//echo $arr;exit;
		}
		return $arr;

	}
	function userprofile($key)
	{
		$id=keytoid("login","lkey",$key);
		//echo "$id";exit;
		$qry="select * from userreg where fid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="userimage/".$key."/".$r['image'];
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;
	}
	function restprofileview($key)
	{
		$id=keytoid("login","lkey",$key);
		//echo "$id";exit;
		$qry="select * from restreg where fid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		$k=null;
		while($r=mysql_fetch_array($e))
		{
			$k=$r['rrkey'];
			$path="hotelimages/".$k."/".$r['image'];
			//echo $path;exit;
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;
	}
	// function addcomplaint($key,$restid,$complaint)
	// {
	// 	$loginid=keytoid("login","lkey",$key);
	// 	$restid=keytoid("restreg","rrkey",$restid);
	// 	$key=uniquekey("complaint","ckey");
	// 	$d=date('y-m-d');
	// 	$qry="insert into complaint(ckey,complaint,loginid,currdate,restid)values('".$key."','".$complaint."','".$loginid."','".$d."','".$restid."')";
	// 	$e=mysql_query($qry);
	// 	if($e)
	// 	{
	// 		echo "<script>alert('complaint registered successfully')</script>";
	// 	}
	// }
	function addoffer($file=null,$menuid,$loginid)
	{
		
		$key=uniquekey("offer","okey");
		$mid=keytoid("menu","mkey",$menuid);
		$lid=keytoid("login","lkey",$loginid);
		$d=date('y-m-d');
		//echo $fid;exit;
		$path="offer/".$menuid;
		mkdir($path);
		$qry2="insert into offer(okey,offer,menuid,loginid,currdate)values('".$key."','".$file['name']."','".$menuid."','".$loginid."','".$d."')";
		$f=mysql_query($qry2);
		//echo $qry2;exit;
		if($f)
		{
			
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			echo "<script>alert('successfully added')</script>";
		}
		else echo "<script>alert('unsuccessful')</script>";
	}
	function Insert_restimages($arr)
	{
		$v=uniquekey("restimages","imgkey");
		$hy=keytoid("login","lkey",$login);
		$qry="insert into restimages(imgkey,loginid) values('".$v."','".$hy."')";
		 $ex1=mysql_query($qry);
		//echo $qry;exit;
		$xx=count($arr);
       	$num=1; 
        $phtoname="mul_uploads_new/".$v;
        mkdir($phtoname);
        foreach($arr as $aa)
    	{
         $query="update restimages set img".$num."='".$aa['name']."' where imgkey='".$v."'";
         // echo $query;exit;
         $res=mysql_query($query);
    
		 	if($res)
		      {
		          move_uploaded_file($aa["tmp_name"],$phtoname."/".$aa["name"]);

		      }
		        $num++;

      
        }
        
       echo "<script> alert('Successfully Uploaded....')</script>";

     
	}
	function cardupload($key,$name,$cno,$cvv,$m,$y,$amt,$mkey)
	{
		//echo $amt;exit;


		//echo $key;exit;
		//echo "hello";exit;
		$k=uniquekey("card","ckey");
		$loginid=keytoid("login","lkey",$key);
		//echo $loginid;exit;
		//echo $key;exit;
		//echo "hello";exit;
		$qqq="select no from userreg where fid='".$loginid."'";
		//echo $qqq;exit;
		$eee=mysql_query($qqq);
		$custno=null;
		while($rrr=mysql_fetch_array($eee))
		{
			$custno=$rrr['no'];
		}
		//echo "hello";
		//echo $custno;exit;
		$qq="select loginid from bank where cardno='".$cno."'";
		$ee=mysql_query($qq);
		$id=null;
		while($rr=mysql_fetch_array($ee))
		{
			$id=$rr['loginid'];
		}
		//echo $id;exit;
		$qqqq="select no from userreg where fid='".$id."'";
		$eeee=mysql_query($qqqq);
		//echo $qqqq;exit;
		$ownerno=null;
		while($rrrr=mysql_fetch_array($eeee))
		{
			$ownerno=$rrrr['no'];
		}
		//echo $ownerno;exit;
		$expdate=$m."/".$y;
		$d=date('y-m-d');


		$mid=keytoid("menu","mkey",$mkey);
		$pkey=uniquekey("purchase","pkey");
		$qry1="insert into purchase(pkey,menuid,loginid,currdate)values('".$pkey."','".$mid."','".$loginid."','".$d."')";
		$e=mysql_query($qry1);
		//echo $qry1;exit;


		$qry="insert into card(ckey,nameoncard,cardno,cvv,expdate,loginid,amt,currentdate)values('".$k."','".$name."','".$cno."','".$cvv."','".$expdate."','".$loginid."','".$amt."','".$d."')";
		$e=mysql_query($qry);
		$qry="select id from bank where cardno='".$cno."' and cvv='".$cvv."'";
		$f=mysql_query($qry);
		//echo $qry;exit;
		$var=null;
		while($r=mysql_fetch_array($f))
		{

			$var=$r['id'];
		}
		//echo $var;exit;
		if($var!=null)
		{
			$q="select totalamt from bank where cardno='".$cno."' and cvv='".$cvv."'";
			// echo $
			$g=mysql_query($q);
			$amount=null;
			while($r=mysql_fetch_array($g))
			{

				$amount=$r['totalamt'];
			}
			$namt=$amount-$amt;
			// echo $amount;exit;
			$qry="update bank set totalamt='".$namt."' where cardno='".$cno."' and cvv='".$cvv."'";
			$ee=mysql_query($qry);
			//echo $qry;exit;
			$rid=keytoid("menu","mkey",$mkey);
			//echo $rid;exit;
			$q1="select * from menu where id='".$rid."'";
			$f=mysql_query($q1);
			//echo $q1;exit;
			$fid=null;
			while($r=mysql_fetch_array($f))
			{

				$fid=$r['fid'];
			}
			//echo $fid;exit;
			$q="select hotelid from staffreg where fid='".$fid."'";
			$e=mysql_query($q);
			//echo $q;exit;
			$hid=null;
			while($r=mysql_fetch_array($e))
			{
				$hid=$r['hotelid'];
			}
			//echo $hid;exit;
			if($hid!=null)
			{
				$q1="select totalamt from bank where loginid='".$hid."'";
				$e1=mysql_query($q1);
				//echo $q1;exit;
				$tamt=null;
				while($r=mysql_fetch_array($e1))
				{
					$tamt=$r['totalamt'];
				}
				$total=$tamt+$amt;
				$q2="update bank set totalamt='".$total."' where loginid='".$hid."'";
				$e=mysql_query($q2);
				//echo $q2;exit;
			}
			//echo $f;exit;
			if($e && $f)
			{
				//echo "hello";exit;


			    	//Your authentication key
				$authKey = "106887AeMrZm7GKPq56de8aba";

				//Multiple mobiles numbers separated by comma
				//$mobileNumber = $custno;
				$mobileNumber =0;


				//echo $amount;exit;
				//echo $custno;exit;
				//echo "hello";exit;

				//Sender ID,While using route4 sender id should be 6 characters long.
				$senderId = "101010";

				//Your message to send, Add URL encoding here.
				$aaa="Your Order is placed";
				$message = urlencode($aaa);

				//Define route 
				$route = "1";
				//Prepare you post parameters
				$postData = array(
    				'authkey' => $authKey,
    				'mobiles' => $mobileNumber,
    				'message' => $message,
    				'sender' => $senderId,
    				'route' => $route
					);

					//API URL
				$url="https://control.msg91.com/api/sendhttp.php";

				// init the resource
				$ch = curl_init();
					curl_setopt_array($ch, array(
    				CURLOPT_URL => $url,
			    	CURLOPT_RETURNTRANSFER => true,
			   		CURLOPT_POST => true,
			    CURLOPT_POSTFIELDS => $postData
			    //,CURLOPT_FOLLOWLOCATION => true
				));


			//Ignore SSL certificate verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


			//get response
			$output = curl_exec($ch);

			//Print error if any
			if(curl_errno($ch))
			{
   				 echo 'error:' . curl_error($ch);
			}

			curl_close($ch);

			echo $output;



			//owner message alert

				//echo "hai";exit;

			 	//Your authentication key
				$authKey = "106887AeMrZm7GKPq56de8aba";

				//Multiple mobiles numbers separated by comma
				$mobileNumber = $ownerno;
				 $mobileNumber =0;
				//echo "hello";exit;

				//echo $amt;exit;

				//Sender ID,While using route4 sender id should be 6 characters long.
				$senderId = "101010";

				//Your message to send, Add URL encoding here.
				$aaa="Transfer of Rs".$amt." has been debited from your account";
				$message = urlencode($aaa);

				//Define route 
				$route = "1";
				//Prepare you post parameters
				$postData = array(
    				'authkey' => $authKey,
    				'mobiles' => $mobileNumber,
    				'message' => $message,
    				'sender' => $senderId,
    				'route' => $route
					);

					//API URL
				$url="https://control.msg91.com/api/sendhttp.php";

				// init the resource
				$ch = curl_init();
					curl_setopt_array($ch, array(
    				CURLOPT_URL => $url,
			    	CURLOPT_RETURNTRANSFER => true,
			   		CURLOPT_POST => true,
			    CURLOPT_POSTFIELDS => $postData
			    //,CURLOPT_FOLLOWLOCATION => true
				));


			//Ignore SSL certificate verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


			//get response
			$output = curl_exec($ch);

			//Print error if any
			if(curl_errno($ch))
			{
   				 echo 'error:' . curl_error($ch);
			}

			curl_close($ch);

			echo $output;

				$q="update bank set amount=amount-'".$amt."' where ckey='".$k."'";
				//echo $q;exit;
				$e1=mysql_query($q);
				echo "<script>alert('successfully paid')</script>";
			}
		}
		else 
		{
			echo "<script>alert('Enter properly')</script>";
		}	


	}
	function restview()
	{
		$qry="select restname,fid from restreg";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$restname=array();
		while($r=mysql_fetch_array($e))
		{
			$restname[]=$r;
		}
		//echo $restname;exit;
		return $restname;
	}
    function staffprofile($id) 
    {
    	$sid=keytoid("login","lkey",$id);
    	$qry="select * from staffview where id='".$sid."'";
    	$e=mysql_query($qry);
    	$rr=array();
    	while ($r=mysql_fetch_array($e))
    	 {
    		$rr[]=$r;
    	}
    	return $rr;
    }
    function forgetpassword($mail,$npass,$cpass) 
    {
    	if($npass==$cpass)
    	{
    		$pass=md5($cpass);
    		$qry="update login set password='".$pass."' where email='".$mail."'";
    		$e=mysql_query($qry);
    		//echo $qry;exit;
    		if($e)
    		{
    			echo "<script>alert('password successfully changed')</script>";
    		}
    		else
    		{
    			echo "<script>alert('Incorrect password entered')</script>";
    		}
    	}
    	else
    	{
    		echo "<script>alert('Confirm password doesnot match')</script>";
    	}

   //  	$otp=rand(1000,9999);
   //  	//Your authentication key
			// 	$authKey = "106887AeMrZm7GKPq56de8aba";

			// 	//Multiple mobiles numbers separated by comma
			// 	$mobileNumber = $otp;

			// 	//echo $amount;exit;

			// 	//Sender ID,While using route4 sender id should be 6 characters long.
			// 	$senderId = "101010";

			// 	//Your message to send, Add URL encoding here.
			// 	$aaa="Your Order is placed";
			// 	$message = urlencode($aaa);

			// 	//Define route 
			// 	$route = "1";
			// 	//Prepare you post parameters
			// 	$postData = array(
   //  				'authkey' => $authKey,
   //  				'mobiles' => $mobileNumber,
   //  				'message' => $message,
   //  				'sender' => $senderId,
   //  				'route' => $route
			// 		);

			// 		//API URL
			// 	$url="https://control.msg91.com/api/sendhttp.php";

			// 	// init the resource
			// 	$ch = curl_init();
			// 		curl_setopt_array($ch, array(
   //  				CURLOPT_URL => $url,
			//     	CURLOPT_RETURNTRANSFER => true,
			//    		CURLOPT_POST => true,
			//     CURLOPT_POSTFIELDS => $postData
			//     //,CURLOPT_FOLLOWLOCATION => true
			// 	));


			// //Ignore SSL certificate verification
			// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


			// //get response
			// $output = curl_exec($ch);

			// //Print error if any
			// if(curl_errno($ch))
			// {
   // 				 echo 'error:' . curl_error($ch);
			// }

			// curl_close($ch);

			// echo $output;
    } 
    function changepassword($opass,$npass,$cpass,$lkey) 
    {
    	if($npass==$cpass)
    	{	

    		//echo $lid;exit;
    		$lid=keytoid("login","lkey",$lkey);
    		//echo $lid;exit;
    		$qry="select * from login where id='".$lid."'";
    		$oldpass=md5($opass);
    		//echo $qry;exit;
    		$e=mysql_query($qry);
    		$email=null;
    		$pass=null;
    		while($r=mysql_fetch_array($e))
   		 	{
   		 		$email=$r['email'];
    			$pass=$r['password'];
    		}
    		//echo $email;exit;
    		//echo $oldpass;exit;
    		//echo $pass;exit;
    		if($oldpass==$pass)
    		{	
    			$npass=md5($npass);
    			$qry="update login set password='".$npass."' where email='".$email."'";
    			$e=mysql_query($qry);
    			//echo $qry;exit;
    			if($e)
    			{
    				echo "<script>alert('password successfully changed')</script>";
    				header('location:loginindex.php');
    			}
    			else
    			{
    				echo "<script>alert('Incorrect password entered')</script>";
    			}
    		}
    		else
    		{
    			echo "<script>alert('Incorrect password')</script>";
    		}
    	}
    	else
    		{
    			echo "<script>alert('New password and Confirm Password doesnot match')</script>";
    		}	
    }	
    function  userprofileedit($name,$no,$pin,$gender,$file=null,$f)

    {
    	$id=keytoid('login','lkey',$f);
    	//echo $f;exit;

   // echo "hi";exit;
    	$qry="update userreg set name='".$name."',pin='".$pin."',gender='".$gender."',image='".$file['name']."',no='".$no."' where fid='".$id."'" ;  
    	//echo $qry;exit;

    	$e=mysql_query($qry);
    	$path="userimage/".$f;
    	//echo $path;exit;
    	mkdir($path);
    	$arr=null;
    	if($e)
    	{
    		
    		//move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			header('location:userprofile.php');
    	}
    

    	//echo $qry;exit; 
    } 
    function purchase($mkey,$key)
    {
    	$menuid=keytoid("menu","$mkey",$mkey);
    	//echo $menuid;exit;
    	$loginid=keytoid("login","lkey",$key);
    	//echo $loginid;exit;
    	$d=date('Y-m-d');
    	$pkey=uniquekey("purchase","pkey");
    	$qry=("insert into purchase(pkey,menuid,loginid,currdate)values('".$pkey."','".$menuid."','".$loginid."','".$d."')");
    	//echo $qry;exit;
    	$e=mysql_query($qry);
    	
    }
    function seatbooking($email,$contact,$date,$time,$password,$seats,$message,$key,$hkey)
	{
		$enc=md5($password);
		$hid=keytoid("restreg","rrkey",$hkey);
		//echo $hkey;exit;
		$qry5="select id from login where email='".$email."' and password='".$enc."'";
    	$e5=mysql_query($qry5);
    	$rr5=null;
    	while ($r5=mysql_fetch_array($e5))
    	{
    		$rr5=$r5['id'];
    	}
    	if($rr5!=null && $e5)
    	{

			$loginid=keytoid("login","lkey",$key);
			//$restid=keytoid("restreg","rrkey",$restid);
			$key1=uniquekey("booking","bkey");
				$d=date('Y-m-d');
			//$t=date('h:i:sa');

			$qry="select * from restreg where id='".$hid."'";
			$e=mysql_query($qry);
			//echo $qry;exit;
			$restseat=null;
			while($r=mysql_fetch_array($e))	
			{
				$restseat=$r['seats'];
			}
			//echo $restseat;exit;
			if($restseat!=null)
			{
				if($restseat>$seats)
				{
					$qry="insert into booking(bkey,date,time,loginid,seats,bookingdate,details,hotelid)values('".$key1."','".$date."','".$time."','".$loginid."','".$seats."','".$d."','".$message."','".$hid."')";
					$e=mysql_query($qry);
					$newseats=$restseat-$seats;
					//echo $newseats;exit;
					//echo $hid;exit;
					//echo "hello";
					//echo $e;exit;
					if($e)
					{
						echo "<script>alert('Seat booked successfully')</script>";
						//header('location:restprofile.php');
						$qry="update restreg set seats='".$newseats."' where id='".$hid."' ";
						//echo $qry;exit;
						$e=mysql_query($qry);
						header('location:userview.php');

					}
					else
					{
						echo "<script>alert('Seat booking unsuccessfull')</script>";
					}
				}
				else
				{
					echo "<script>alert('Only $restseat seats are available')</script>";
				}
			}
			else
			{
				echo "<script>alert('All seats are booked!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Your account details does not match!')</script>";
		}
	}
	function addcomplaint($comp,$f,$hid)
	{
		$ckey=uniquekey("complaint","ckey");
		$lid=keytoid("login","lkey",$f);
		//echo $f;exit;
		//echo $lid;exit;
		$hid=keytoid("restreg","rrkey",$hid);
		$d=date('Y-m-d');
		$qry="insert into complaint(ckey,complaint,loginid,currdate,restid)values('".$ckey."','".$comp."','".$lid."','".$d."','".$hid."')";
		$e=mysql_query($qry);
		//echo $qry;exit;
		if($e)
		{
			echo "<script>alert('complaint registered')</script>";
		}

	}
	function viewcomplaints($key)
	{
		$rkey=keytoid("restreg","rrkey",$key);
		$qry="select * from complaint where restid='".$rkey."'";
		$e=mysql_query($qry);
		$rr=array();
    	while ($r=mysql_fetch_array($e))
    	{
    		$rr[]=$r;
    	}
    	return $rr;
    }
    function addrecipe($cat,$name,$amt,$det,$file=null,$fid)
	{
		$key=uniquekey("recipe","rkey");
		$id=keytoid("login","lkey",$fid);
		$path="recipeimage/".$key;
		mkdir($path);
        $qry="insert into recipe (rkey,category,name,amount,details,image,hotelid)values('".$key."','".$cat."','".$name."','".$amt."','".$det."','".$file['name']."','".$id."')";
        $e=mysql_query($qry);
        //echo $qry;exit;s
        if($e)
		{
			echo"<script>alert('successful')</script>";
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			//header('location:login.php');

		}
		else echo"<script>alert('unsuccessful')</script>";

	}
	function viewrecipe($k)
	{
		//echo $k;exit;
		$id=keytoid("login","lkey",$k);
		$qry="select * from recipe where hotelid='".$id."'";
		//echo $qry;exit;
		$e=mysql_query($qry);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{
			$path="recipeimage/".$r['rkey']."/".$r["image"];
			//echo $path;exit;
			$r['image']=$path;
			$arr[]=$r;
		//echo $arr;exit;
		}
		//print_r($arr);exit;
		return $arr;

	}
	 function  staffaccountedit($name,$no,$add,$gender,$file=null,$f)

    {
    	$id=keytoid('login','lkey',$f);
    	//echo $f;exit;

   // echo "hi";exit;
    	$qry="update staffreg set name='".$name."',address='".$add."',gender='".$gender."',image='".$file['name']."',no='".$no."' where fid='".$id."'" ;  
    	//echo $qry;exit;
    	$q="select * from staffreg where fid='".$id."'";
    	//echo $q;exit;
    	$skey=null;
    	$e=mysql_query($q);
    	while($r=mysql_fetch_array($e))
    	{
    		$skey=$r['skey'];
    	}
    	//echo $skey;exit;
    	$e=mysql_query($qry);
    	$path="staffimages/".$skey;
    	mkdir($path);
    	$arr=null;
    	if($e)
    	{
    		echo "<script>alert('successful')</script>";
    		//move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			header('location:staffaccount.php');
    	}
    

    	//echo $qry;exit; 
    } 
     function  restaccountedit($name,$add,$pin,$dist,$city,$cno,$reser,$seat,$park,$file=null,$f)

    {
    	$id=keytoid('login','lkey',$f);
    	//echo $f;exit;

   // echo "hi";exit;
    	$qry="update restreg set restname='".$name."',address='".$add."',pincode='".$pin."',image='".$file['name']."',district='".$dist."',city='".$city."',contactno='".$cno."',reservation='".$reser."',seats='".$seat."',parking='".$park."' where fid='".$id."'" ;  
    	//echo $qry;exit;
    	$q="select * from restreg where fid='".$id."'";
    	//echo $q;exit;
    	$skey=null;
    	$e=mysql_query($q);
    	while($r=mysql_fetch_array($e))
    	{
    		$skey=$r['rrkey'];
    	}
    	//echo $skey;exit;
    	$e=mysql_query($qry);
    	$path="hotelimages/".$skey;
    	//echo $path;exit;
    	mkdir($path);
    	$arr=null;
    	if($e)
    	{
    		echo "<script>alert('successful')</script>";
    		// //move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
    		// $ex=$file["tmp_name"],$path."/".$file["name"];
    		// echo $ex;exit;
			move_uploaded_file($file["tmp_name"],$path."/".$file["name"]);
			header('location:restaccount.php');
    	}
    

    	//echo $qry;exit; 
    } 	
	function addorder($mkey,$lkey,$qnty)
	{
		$ckey=uniquekey("cart","ckey");
		$loginid=keytoid("login","lkey",$lkey);
		//echo $loginid;exit;
		$menuid=keytoid("menu","mkey",$mkey);
		//echo $restid;exit;
		
		//$key=uniquekey("menu","mkey");
		//echo $qnty;exit;
		$q1="select * from menu inner join recipe on recipe.id=menu.recipe_id where menu.mkey='".$mkey."'";
		//echo $q1;exit;
		$e1=mysql_query($q1);
		$hid=null;
		$img=null;
		while($r=mysql_fetch_array($e1))
		{
			$hid=$r['hotelid'];
			$img=$r['image'];
		}
		//echo $hid;exit;
		$q2="select rrkey from restreg where fid='".$hid."'";
		//echo $q2;exit;
		$e2=mysql_query($q2);
		$rrkey=null;
		while($r=mysql_fetch_array($e2))
		{
			$rrkey=$r['rrkey'];
		}
		//echo $rrkey;exit;
		$restid=keytoid("restreg","rrkey",$rrkey);
		//echo $restid;exit;
		$qry="select id from cart where loginid='".$loginid."' and menuid='".$menuid."'";
		//
		//echo $qry;exit;
		$ee=mysql_query($qry);
		if($row=mysql_fetch_array($ee)>0)
		{
				$qry1="update cart set quantity=quantity+'".$qnty."' where loginid='".$loginid."' and menuid='".$menuid."'";
				$ee1=mysql_query($qry1);

		}
		else
		{
		$q="insert into cart(ckey,loginid,menuid,restid,quantity)values('".$ckey."','".$loginid."','".$menuid."','".$restid."','".$qnty."')";
		//echo $q;exit;
		$e=mysql_query($q);
		}
		if($e||$ee1)
		{

			header('location:restprofile.php?v='.$rrkey.'#gallery');
		}

	

	}
	function orderview($lkey,$rrkey)
	{
		$loginid=keytoid("login","lkey",$lkey);
		//echo $loginid;exit;
		$restid=keytoid("restreg","rrkey",$rrkey);
		//echo $rrkey;exit;
		$q="select * from cart c, menu m, recipe r where m.recipe_id=r.id and m.id=c.menuid and c.loginid='".$loginid."' and c.restid='".$restid."'";
		//$q="select * from cart inner join menu on menu.id=cart.menuid where cart.loginid='".$loginid."' and cart.restid='".$restid."'";
		//echo $q;exit;
		$e=mysql_query($q);
		$arr=array();
		while($r=mysql_fetch_array($e))
		{

			$path="recipeimage/".$r['rkey']."/".$r["image"];
			$r['image']=$path;
			$arr[]=$r;
		}
		return $arr;
		//print_r($arr);exit;
	}
	function removeorder($okey,$lkey)
	{
		$oid=keytoid("cart","ckey",$okey);
		$qry="select restid from cart where id='".$oid."'";
		$res=mysql_query($qry);
		$restid=null;
		while ($row=mysql_fetch_array($res)) 
		{
			$restid=$row['restid'];
		}
		$qry1="select rrkey from restreg where id='".$restid."'";
		// echo $qry1;exit;
		$res1=mysql_query($qry1);
		$restkey=null;
		while ($row1=mysql_fetch_array($res1)) 
		{
			$restkey=$row1['rrkey'];
		}
		//echo $restkey;exit;
		$q="delete from cart where id='".$oid."'";
		// echo $q;exit;
		$e=mysql_query($q);
		header('location:order.php?v='.$restkey);
	}




}
