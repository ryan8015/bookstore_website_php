<?php
include 'conn.php';
if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fn']) || empty($_POST['ln']) || empty($_POST['psw']) || empty($_POST['psw-repeat']) || empty($_POST['email']))
        {
			$msg.="<li>Please full fill all requirement";
		}
		
		if($_POST['psw']!=$_POST['psw-repeat'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		
		
		if(strlen($_POST['psw'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fn']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
        if(is_numeric($_POST['ln']))
        {
            $msg.="<li>Name must be in String Format...";
        }
           
		if($msg!="")
		{
			header("location:index.php?error=".$msg);
		}
		else
		{
			$fn=$_POST['fn'];
			$ln=$_POST['ln'];
			$psw=$_POST['psw'];
			$contact=$_POST['contact'];
			$email=$_POST['email'];			
			
			$query="insert into customer(email,contact_number,first_name,last_name,password)
			values('$email','$contact','$fn','$ln','$psw')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
            header("location:signed_up.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>