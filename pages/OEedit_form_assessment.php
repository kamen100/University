<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT 
subjects.name_subject,assessment.id,assessment.assessment,assessment.id_user, subjects.id_subject, users.ID_user,subjects.name_subject
FROM assessment 
LEFT JOIN subjects 
ON assessment.id_subjects=subjects.id_subject 
LEFT JOIN users 
ON assessment.id_user=users.ID_user 
WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form  method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>Предмет</td>
            <td><input type='text' name='' class='form-control' value= '<?php echo $row['name_subject']; ?>' required ></td>
        </tr>
 
        <tr>
            <td>Оценка</td>
            <td><input type='text' name='assessments' class='form-control' value='<?php echo $row['assessment']; ?>' required></td>
        </tr>
 
        <!--tr>
            <td>Телефонен номер</td>
            <td><input type='text' name='emp_phonenumber' class='form-control' value='<?php //echo $row['emp_phonenumber']; ?>' required></td>
        </tr-->
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Запамети промените
			</button>
            </td>
        </tr>
 
    </table>
</form>