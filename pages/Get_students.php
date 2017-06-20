<?php
session_start();
?>
<!DOCTYPE html>

<html xmnls="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Секция оценки <?php echo $idspec; ?></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
        <link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="checks.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

        <script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
    </head>

        <div class="container">

            <h2 class="form-signin-heading">Въвеждане на оценки</h2><hr />
            
            <div class="content-loader">

                <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th hidden="true">ID</th>        
                            <th>Име</th>
                            <th>Презиме</th>
                            <th>Фамилия	</th>
                            <th>Оценка</th>                            
                        </tr>
                    </thead>
                    <tbody>
		<!-------------------------------------------------------------------------->



<?php
include('dbconfig.php');
if($_POST['id_speciality'])
{
 //$idsub=$_POST['id_subject'];
 $idspec=$_POST['id_speciality'];
 
 $stmt = $db_con->prepare("SELECT * 
FROM users
WHERE users.ID_role=1
AND users.id_specialities=:idspec");
 $stmt->execute(array(':idspec' => $idspec));
  
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td hidden="true"><?php echo $row['ID_user']; ?></td>
                                <td><?php echo $row['first_name']; ?></td>
                                <td><?php echo $row['midle_name']; ?></td>
                                <td><?php echo $row['sur_name']; ?></td>
                                <td><input name='assessment'></input></td>                                                                               
                            </tr>
                            <?php
                        } 
						
}						
?>
<!-------------------------------------------------------------------------->

                    </tbody>
                </table>
            </div>
        </div>
        <br />
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/datatables.min.js"></script>
        <script type="text/javascript" src="crud_assessment.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#example').DataTable();

                $('#example')
                        .removeClass('display')
                        .addClass('table table-bordered');
            });
        </script>