<?php
include_once ('specialitiesClass.php');
$con=new specialities();
$table = "specialities";
$res = $con->selectspecialities($table);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Специалности</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <center>
            <div id="header">
                <div id="content">
                    <label>Специалности</label>
                </div>
            </div>
            <div id="body">
                <div id="content">
                    <table align="center">
                        <!--tr>
                        <th colspan="7"><a href="insert_student.php">Добавяне на потребител от тук...</a></th>
                        </tr>
                        <tr>
                        <tr>
                        <th colspan="7"><a href="update.php">Променете данни от тук...</a></th>
                        </tr>
                        <tr>
                        <th colspan="7"><a href="delete_data.php">Изтрийте данни от тук...</a></th>
                        </tr-->
                        <th>ID</th>
                        <th>Име Специалност</th>
                        <th>Факултет</th>
                        
                        </tr>
                        <?php
                        while ($row = mysql_fetch_row($res)) {
                            ?>
                            <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>

            <div id="footer">
                <div id="content">               
                            </div>
                            </div>

                            </center>
                            </body>
                            </html>