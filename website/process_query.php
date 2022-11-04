<?php
include 'conn.php';
if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['email']) || empty($_POST['nm']) || empty($_POST['question']))
        {
			$msg.="<li>Please full fill all requirement";
		}
		if(is_numeric($_POST['nm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
           
		if($msg!="")
		{
			header("location:index.php?error=".$msg);
		}
		else
		{
			$nm=$_POST['nm'];
			$email=$_POST['email'];
			$question=$_POST['question'];			
			
			$query="INSERT INTO `question`(`name`, `subject`, `email`) VALUES ('$nm','$question','$email')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
            header("location:placequery.php");
		}
	}
	else
	{
		header("location:contact_page.php");
	}
?>
