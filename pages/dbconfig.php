<?php

	$db_host = "localhost";
	$db_name = "l1stuche_sis";
    $db_charset="utf-8";
	$db_user = "l1stuche_kamen";
	$db_pass = "Presiqn11";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name};db_charset={$db_charset}",$db_user,$db_pass);
		$db_con->exec("SET NAMES 'utf8'");
                $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>