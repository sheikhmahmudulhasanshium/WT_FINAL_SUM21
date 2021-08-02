<?php

$username = "";
$err_username = "";
$email = "";
$err_email = "";
$hasError=false;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else if(strlen($_POST["username"])< 6)
	{
		$hasError = true;
		$err_username = "UserName must be at least 6 characters";
	}
	else if(strpos($_POST["username"], ' ') !== false)
	{
		$hasError = true;
		$err_username = "UserName doesn't allow spaces";
	}
	else
	{
		$username = $_POST["username"];
	}
	
	
	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email required";
	}
	else if(strpos($_POST["email"],"@") && strpos($_POST["email"],".") )
	{
		$email = $_POST["email"];
	}
	else
	{
		$hasError = true;
		$err_email = "Email format not correct";
	}
	

	
	if(!$hasError)
	{
	echo $_POST["username"]."<br>";
	echo $_POST["email"]."<br>";
	}
	
}
$password = "";
$err_password = "";
$confirm_password = "";
$err_confirm_password = "";


$hasError = false;



if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}

	else if((strlen($_POST["password"])< 8))
	{
		$hasError = true;
		$err_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["password"])>= 8))
	{
	
	$passwordvariable = $_POST["password"];
	$uppercase = preg_match('@[A-Z]@',$passwordvariable);
	$lowercase = preg_match('@[a-z]@',$passwordvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_password = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_password = "Password requires lowercase letters";
	}
	if(strpos($_POST["password"],'#') == false && (strpos($_POST["password"],'?') == false))
	{
		$hasError = true;
		$err_password = "Password requires minimum 1 '#' and '?'";
	}
	
	
	else
	{
		$password = $_POST["password"];
	}
	if(($_POST["password"]=="username123")  || ($_POST["password"]=="password"))
	{
		$hasError = true;
		$err_password = "Password can be common password'";
	}
	
	
	else
	{
		$password = $_POST["password"];
	}
	}
	
	if(empty($_POST["confirm_password"]))
	{
		$hasError = true;
		$err_confirm_password = "Password required";
	}
	elseif((strlen($_POST["confirm_password"])< 8))
	{
		$hasError = true;
		$err_confirm_password = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["confirm_password"])>= 8))
	{
	
	
	
	$passwordvariable = $_POST["confirm_password"];
	$uppercase = preg_match('@[A-Z]@',$passwordvariable);
	$lowercase = preg_match('@[a-z]@',$passwordvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_confirm_password = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_confirm_password = "Password requires lowercase letters";
	}
	if(strpos($_POST["confirm_password"],'#') == false && (strpos($_POST["confirm_password"],'?') == false))
	{
		$hasError = true;
		$err_confirm_password = "Password requires minimum 1 '#' and '?'";
	}
	
	else
	{
		$confirm_password = $_POST["confirm_password"];
	}
	}
	
	
	if(!$hasError)
	{
		echo "You have successfully changed your password.Your new password is "; 
		echo $_POST["password"]."<br>";

	}
	
}

?>

