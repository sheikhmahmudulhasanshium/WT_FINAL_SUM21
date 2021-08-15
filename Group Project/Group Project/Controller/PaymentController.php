
<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$name = "";
$err_name = "";
$paymentCat="";
$err_paymentCat="";
$description = "";
$err_desc = "";
$err_db = "";

$hasError = false;

if(isset($_POST["add_payment_method"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	
	if(empty($_POST["description"]))
	{
		$hasError = true;
		$err_desc = " Description required";
	}
	else
	{
		$description = $_POST["description"];
	}
	if(!isset($_POST["paymentCat"]))
	{
		$hasError=true;
		$err_paymentCat=" Category required";
	}
	else
	{
		$paymentCat=$_POST["paymentCat"];
	}

	if(!$hasError)
	{
		
	
	$rs = inseertPaymentMethod($_POST["name"],$_POST["paymentCat"],$_POST["description"]);
	if($rs === true)
	{
		header("Location: Payment_Method.php");
	}
	$err_db = $rs;
	}
}


elseif(isset($_POST["Delete_Payment_Method"]))
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = " Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = " Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	if(!isset($_POST["paymentCat"]))
	{
		$hasError=true;
		$err_paymentCat=" Category required";
	}
	else
	{
		$paymentCat=$_POST["paymentCat"];
	}
	if(!$hasError)
	{
	$rs = deleteCat($_POST["name"]);
	
	if($rs === true)
	{	
	//echo "OK";
		header("Location: Payment_Method.php");
	}
	else{
	$err_db = $rs;
	}
	}
	
}

function inseertPaymentMethod($name,$paymentCat,$description)
{
	$query = "insert into paymentmethod values (NULL,'$name','$paymentCat','$description')";
	return execute($query);
}

function deleteCat($name)
{
	
	$query = "DELETE FROM paymentmethod WHERE name='$name'";
	//echo $query;
	return execute($query);
}

function getPaymentMethods()
{
	$query = "SELECT * FROM `paymentmethod` ORDER BY `paymentmethod`.`paymentCat` ASC;	";
	$rs = get($query);
	return $rs;
}

function getPaymentMethod($id)
{
	$query = "SELECT * FROM `paymentmethod` ORDER BY `paymentmethod`.`paymentCat` ASC;	";
	$rs = get($query);
	return $rs[0];
}

function updatePaymentMethod($name,$paymentCat,$description,$id)
{
	$query = "update paymentmethod set name ='$name',category='$paymentCat',description ='$description' where id = $id";
	echo $query;
	return execute($query);
}
function checkName($name){ 		
	$query = "select name from paymentmethod where name='$name'"; 		
	$rs = get($query); 		
	if(count($rs) > 0){ 			
		return true; 		} 	
			return false; 	}
?>