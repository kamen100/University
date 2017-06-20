<?php
session_start();
include('dbconfig.php');
//if($_POST['id_subject'], $_POST['assessment'], $_POST['ID_user'])
//{
 //$ids=$_POST['id_subject'];
 //$idu=$_POST['ID_user'];
 //$ass=$_POST['assessment'];
 
 $idu = $_POST['val1'];
 $ass = $_POST['val2'];
 $ids = $_POST['val3'];
  
 $stmt = $db_con->prepare("INSERT INTO `assessment`(assessment, id_subjects, id_user)
VALUES assessment=:ass, id_subjects=:ids, ID_user=idu");
 $stmt->execute(array(':ids' => $ids));
 $stmt->execute(array(':idu' => $idu));
 $stmt->execute(array(':ass' => $ass));
 
//}
?>