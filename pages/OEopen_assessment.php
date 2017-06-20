<!DOCTYPE html>

<html xmnls="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Секция оценки</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="checks.js"></script>
		<script type="text/javascript" src="myscript.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('OEadd_form_assessment.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('OEopen_assessment.php');
			$("body").fadeIn('slow');
			window.location.href="OEopen_assessment.php";
		});
	});
	
});
</script>

</head>

<body>
    


	<div class="container">
      
        <h2 class="form-signin-heading">Секция оценки</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Добави оценка на студент</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Обратно в секция оценки</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>ID</th>        
        <th>Име</th>
		<th>Презиме</th>
		<th>Фамилия	</th>
		<th>Предмет</th>
        <th>Оценка</th>
        <th>Промени</th>
        <!--Изтрий></th-->
        </tr>
        </thead>
        <tbody>
            
        <?php
        require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT  
assessment.id,
users.ID_user,
subjects.name_subject,
users.first_name,
users.midle_name,
users.sur_name,
assessment.assessment
FROM  assessment
LEFT JOIN users
ON assessment.id_user=users.ID_user
LEFT JOIN subjects
ON assessment.id_subjects=subjects.id_subject");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>
            <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['midle_name']; ?></td>
            <td><?php echo $row['sur_name']; ?></td>
			<td><?php echo $row['name_subject']; ?></td>
            <td><?php echo $row['assessment']; ?></td>
            <!--td><?php //echo $row['email']; ?></td-->
			<!--td><?php //echo $row['phone_number']; ?></td-->
			<td align="center">
			<a id="<?php echo $row['id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
            </a></td>
			<!--td align="center"><a id="<?php// echo $row['emp_id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            </a></td-->
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
    
    <div class="container">
      
        <div class="alert alert-info">
        <a href="http://prebor.space" target="_blank">Made by</a>
        </div>

    </div>
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="OEcrud_assessment.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>