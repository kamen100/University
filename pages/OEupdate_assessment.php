<?php
require_once 'dbconfig.php';

	
	/*if($_POST)
	{
		$ida = $_POST['id'];
		$ocenka = $_POST['assessments'];
		//$emp_dept = $_POST['subjects'];
		//$emp_phonenumber = $_POST['id_subjects'];
		
		$stmt = $db_con->prepare('UPDATE assessment SET assessment.assessment=:en WHERE assessment.id=:ids');
		//$stmt = $db_con->prepare("UPDATE `assessment` SET `assessment`=4 WHERE `id`=3");
		$stmt->bindParam(":en", $ocenka);
		//$stmt->bindParam(":ed", $emp_dept);
		//$stmt->bindParam(":ep", $emp_phonenumber);
		$stmt->bindParam(":ids", $ida);
		
		if($stmt->execute())
		{
			echo "Успешно е актуализирана информацията";
		}
		else{
			echo "Проблем със заявката";
		}
		echo 'Тъпън, що не става?';
                echo $ida;
                echo $ocenka;
	}
          */
$ida = $_POST['id'];
$ocenka = $_POST['assessments'];
//$emp_dept = $_POST['subjects'];
//$emp_phonenumber = $_POST['id_subjects'];
$stmt = $db_con->prepare('UPDATE assessment SET assessment.assessment=:en WHERE assessment.id=:ids');

$stmt->bindParam(":en", $ocenka);
//$stmt->bindParam(":ed", $emp_dept);
//$stmt->bindParam(":ep", $emp_phonenumber);
$stmt->bindParam(":ids", $ida);

$stmt->execute();
?>