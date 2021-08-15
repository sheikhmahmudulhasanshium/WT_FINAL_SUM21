<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/PaymentController.php';
session_start();
$_SESSION["Payment_Method"] = "PAYMENT METHOD";
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" onsubmit = "return validate()"  method="post" enctype= "multipart/form-data">
<h2 style="color:red" align ="center">ADD <?php echo $_SESSION["Payment_Method"];?></h2>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Bank Name:</b></td>
<td>&nbsp;<input type="text" id = "name"   onfocusout="checkName(this)" name = "name"><br> <?php echo $err_name; ?> <span style="color:red"id = "err_name"></span> </td></tr>
<tr><td align="right"><b>Category:</b></td>
<td>&nbsp;<select name="paymentCat" id="paymentCat"><option value="select"selected disabled>-----Select-----</option><option value="Debit/Credit Cards">Debit/Credit Cards</option><option value="Mobile Banking">Mobile Banking</option><option value="Internet Banking">Internet Banking</option></select>
<?php echo $err_paymentCat; ?> <span id = "err_paymentCat"></span> </td></tr>

<tr><td align="right"><b>Description:</b></td>
<td>&nbsp;<input type="text" id = "description" name = "description"><?php echo $err_desc; ?><span id = "err_description"></span> </td></tr>

<tr><td></td>
<td>&nbsp;<input type="submit" name ="add_payment_method" value="Add" ></td></tr>
<script src = "JS/Payment_Method.js"></script>
<script src="JS/check_payment_method.js"></script>
</table>
</body>
</html>
