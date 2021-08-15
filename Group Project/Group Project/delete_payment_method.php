<?php 
require_once 'Controller/PaymentController.php';
$id = $_GET["id"];
$c = getPaymentMethod($id);
?>
<html>
<body>
<h1 style="color:blue;" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red;" align ="center">Delete Payment Method:</h2>
<span><?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:70%;" align="center" border="4">
<input type="hidden" name= "id" value = "<?php echo $c["id"]; ?>">
<tr><td align="right"><b>Bank Name:</b></td><td>&nbsp;<input type="text" name= "name" value = "<?php echo $c["name"]; ?>"><span><?php echo $err_name ?></span> </td></tr>
<tr><td align="right"><b>Category:</b></td><td>&nbsp;<input type="text" name= "paymentCat" value = "<?php echo $c["paymentCat"]; ?>"><span><?php echo $err_paymentCat ?></span> </td></tr>
<tr><td ><b></b></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name= "Delete_Payment_Method" value="Delete" ></td></tr>
</table>
</body>
</html>