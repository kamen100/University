<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$ids = $_POST['id'];		
		$assessmentss = $_GET['assessment'];
        $subjects=$_GET['id_subjects'];
		
		$stmt = $db_con->prepare("UPDATE assessment SET assessment =':ep',id_subjects=':sj'  WHERE id=:idss");
		$stmt->bindParam(":ep", $assessmentss);
        $stmt->bindParam(":sj", $subjects);
		$stmt->bindParam(":idss", $ids);
		
		if($stmt->execute())
		{
			echo "Успешно е актуализирана информацията";
		}
		else{
			echo "Проблем със заявката";
		}
	}

?>