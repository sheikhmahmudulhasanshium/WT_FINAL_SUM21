<?php
    require_once 'Models/db_config.php';
	$name="";
	$err_name="";
	$hasError=false;
	$err_db="";
		
		function getAllDepartments(){
			$query="select * from department";
			$rs=get($query);
			return $rs;
		}
?>