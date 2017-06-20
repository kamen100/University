<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM users WHERE ID_user=:id");
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
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='ID_use' value='<?php echo $row['ID_user']; ?>' />
        <tr>
            <td>Име</td>
            <td><input type='text' name='f_name' class='form-control' value='<?php echo $row['first_name']; ?>' required></td>
        </tr> 
        <tr>
            <td>Презиме</td>
            <td><input type='text' name='m_name' class='form-control' value='<?php echo $row['midle_name']; ?>' required></td>
        </tr>
        <tr>
            <td>Фамилия</td>
            <td><input type='text' name='s_name' class='form-control' value='<?php echo $row['sur_name']; ?>' required></td>
        </tr>
        <tr>
            <td>Адрес</td>
            <td><input type='text' name='addre' class='form-control' value='<?php echo $row['addres']; ?>' required></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type='text' name='emaile' class='form-control' value='<?php echo $row['email']; ?>' required></td>
        </tr>
        <tr>
            <td>Телефонен номер</td>
            <td><input type='text' name='phon_number' class='form-control' value='<?php echo $row['phone_number']; ?>' required></td>
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