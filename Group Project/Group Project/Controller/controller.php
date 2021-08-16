<?php
error_reporting (E_ALL ^ E_NOTICE);
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
	
	
	
	
	
	if(!$hasError)
	{
		echo "You have successfully changed your password.Your new password is "; 
		echo $_POST["password"]."<br>";

	}
	
}

?>
