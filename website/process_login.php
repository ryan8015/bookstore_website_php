<?php session_start();
include 'conn.php';
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['email']))
		{
			$msg[]="No such email";
		}
		
		if(empty($_POST['psw']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$email=$_POST['email'];
			
			$q="select * from customer where email='$email'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['psw']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
					$_SESSION['psw']=$row['password'];
					$_SESSION['status']=true;
                    $_SESSION['logged']=$row['email'];
					if($_SESSION['email']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/index.php");
					}
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>