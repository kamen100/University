<?php
session_start();
include('dbconfig.php');
if($_POST['id_subject'])
{
 $id=$_POST['id_subject'];
 
  
 $stmt = $db_con->prepare("SELECT subjects.id_subject,subjects.name_subject,subjects_specialities.id_specialities,specialities.id_speciality,specialities.speciality_name
FROM subjects
LEFT JOIN subjects_specialities
ON subjects.id_subject=subjects_specialities.id_subjects
LEFT JOIN specialities
ON subjects_specialities.id_specialities=specialities.id_speciality
WHERE subjects.id_subject=:id");
 $stmt->execute(array(':id' => $id));
 ?><option selected="selected">Изберете Специалност :</option><?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
        <option value="<?php echo $row['id_speciality']; ?>"><?php echo $row['speciality_name']; ?></option>
        <?php
 }
}
?>