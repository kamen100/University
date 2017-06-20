<?php
include_once ('newconnect.php');
include_once ('newstudents.php');
//$con = new DB_con();
$con= new newstudents();
$table = "users";
$res = "SELECT * FROM users";
//$query= mysqli_query($link, $res);

//$res = $con->selectnew($table);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Секция студенти</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <center>
            <div id="header">
                <div id="content">
                    <label>Студенти</label>
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
                        <th>Име</th>
                        <th>Фамилия</th>
                        <th>Град</th>
                        <!--th>Адрес</th>
                        <th>Телефон</th>
                        <th>e-mail</th-->	
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                            <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
				<!--td><?php// echo $row[5]; ?></td>
                                <td><?php// echo $row[6]; ?></td>
                                <td><?php// echo $row[7]; ?></td>
                                <td><?php// echo $row[8]; */?></td-->
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