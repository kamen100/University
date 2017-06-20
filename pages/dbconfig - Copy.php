<?php

	$db_host = "http://web.jumphosting02.com:2083";
	$db_name = "myapps_jquery_crud";
        $db_charset="utf-8";
	$db_user = "myappssp_admin";
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