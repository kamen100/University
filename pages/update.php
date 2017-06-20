<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['ID_user'];
		$f_name = $_POST['f_name'];
		$m_name = $_POST['m_name'];
		$s_name = $_POST['s_name'];
		$addres = $_POST['addre'];
		$email = $_POST['emaile'];
		$phone_number = $_POST['phon_number'];
		
		$stmt = $db_con->prepare("UPDATE users SET first_name=:en,midle_name=:em,sur_name=:es,addres=:ad,email=:ma,phone_number=:ep WHERE ID_user=:id");
		$stmt->bindParam(":en", $f_name);
		$stmt->bindParam(":em", $m_name);
		$stmt->bindParam(":es", $s_name);
		$stmt->bindParam(":ad", $addres);
		$stmt->bindParam(":ma", $email);
		$stmt->bindParam(":ep", $phone_number);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Успешно е актуализирана информацията";
		}
		else{
			echo "Проблем с актуализирането на информацията";
		}
	}

?>