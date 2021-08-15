<?php 	include 'Controller/PaymentController.php';
  	$name = $_GET["name"]; 	
      $nam = checkName($name); 	
      if($nam){ 		
          echo "invalid"; 	} 	
          else echo "valid"; 
          ?>