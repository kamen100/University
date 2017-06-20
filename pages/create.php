<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$first_name = $_POST['first_name'];
		$midle_name = $_POST['midle_name'];
                $sur_name = $_POST['sur_name'];
                $addres = $_POST['addres'];
                $email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO users(first_name,midle_name,sur_name,addres,email,phone_number) "
                                . "VALUES(:fname,:mname,:sname,:aaddres,:eemail,:ephonenumber)");
			$stmt->bindParam(":fname", $first_name);
                        $stmt->bindParam(":mname", $midle_name);
			$stmt->bindParam(":sname", $sur_name);
                        $stmt->bindParam(":aaddres", $addres);
                        $stmt->bindParam(":eemail", $email);
			$stmt->bindParam(":ephonenumber", $phone_number);
			
			if($stmt->execute())
			{
				echo "Успешно добавен запис";
			}
			else{
				echo "Проблем със записа";
			}	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>