<?php
		require_once "Models/db_config.php";
		//session_start();
		$Username="";
		$err_Username="";
		$email="";
		$err_email="";


		$hasError=false;
		
		if(isset($_POST["Forgot_Pass"]))
		{
		if(empty($_POST["Username"]))
				{
					$hasError=true;
					$err_Username="Username Required";
				}
				
				else
				{
					$Username=$_POST["Username"];
				}
				
				
				if(empty($_POST["email"]))
				{
					$hasError=true;
					$err_email="Email Required";
				}
				
				else
				{
					$email=$_POST["email"];
				}
				
				
				
			if(!$hasError){
			$rs= authenticateCustomer($Username,$email);
			if($rs === true)
			{
				
				setcookie("loggeduser0",$Username,time()+1000);
				header("Location: CustomerPanel.php");
			}
			
			$rs= authenticatAdmin($Username,$email);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser",$Username,time()+1000);
				header("Location: Admin_panel.php");
			}
			
			$rs= authenticatManager($Username,$email);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser1",$Username,time()+1000);
				header("Location: Manager_panel.php");
			}
			
			$rs= authenticatReceiptionist($Username,$email);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser2",$Username,time()+1000);
				header("Location: Receiptionist_panel.php");
			}
			
			$rs= authenticatHeadChef($Username,$email);
			if($rs === true)
			{
				//$_SESSION["loggeduser"] = $Username;
				setcookie("loggeduser3",$Username,time()+1000);
				header("Location: ChefHeadPanel.php");
			}
			
			$err_db= $rs;
			}
		}
		

	function authenticateCustomer($Username,$email)
	{
		$query= "select * from customers where userName= '$Username' and email= '$email'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatAdmin($Username,$email)
	{
		$query= "select * from admin where userName= '$Username' and email= '$email'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatManager($Username,$email)
	{
		$query= "select * from manager where userName= '$Username' and email= '$email'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatReceiptionist($Username,$email)
	{
		$query= "select * from receiptionist where userName= '$Username' and email= '$email'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatHeadChef($Username,$email)
	{
		$query= "select * from headchef where userName= '$Username' and email= '$email'";
		$rs= get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
?>

