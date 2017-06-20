<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT subjects.name_subject,subjects.id_subject,assessment.assessment,assessment.id_user, subjects.id_subject, users.ID_user 
	FROM assessment 
	LEFT JOIN subjects ON assessment.id_subjects=subjects.id_subject 
	LEFT JOIN users ON assessment.id_user=users.ID_user 
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
        
 	
	 <form method='GET' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['id']; ?>' />
        <tr>
            <td>Предмет</td>
            <td><input type='text' name='subjects' class='form-control' value='<?php echo $row['id_subjects']; ?>' required <!--disabled=""--></td>
        </tr>
 
        <tr>
            <td>Оценка</td>
            <td><input type='text' name='assessment' class='form-control' value='<?php echo $row['assessment']; ?>' required></td>
        </tr> 
        
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Запамети промените
			</button>
            </td>
        </tr>
 
    </table>
</form>