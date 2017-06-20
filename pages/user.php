<?php 
include_once 'dbconfig.php';
/*include_once 'dbMySql.php';
$con = new DB_con();
$table = "students";
$res = $con->select($table);*/
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style_table.css" type="text/css" />
	<link rel="stylesheet" href="v.css" type="text/css" />
    <title>СИС</title>
</head>
<div id="top">
<h1 align="center" id="h1" >Страница на Юзърите</h1>
</div>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style>
        .sis {display:none;}
    </style>
    
    <body class="w3-container">


        <ul class="w3-navbar w3-black">
            <li><a href="javascript:void(0)" class="tablink" onclick="tab(event, 'PersonalInfo');">Персонална информация</a></li>
            <li><a href="javascript:void(0)" class="tablink" onclick="tab(event, 'assessment');">Оценки</a></li>
        </ul>

        <div id="PersonalInfo" class="w3-container w3-border sis">
            <h2 align="center">Персонална информация</h2>  
            <table align="center">
                <tr>
                    <th colspan="4">Име</th><td><?php echo $_SESSION['first_name']; ?></th>
                </tr>
                <tr>
                    <th colspan="4">Презиме</th><td><?php echo $_SESSION['midle_name']; ?></td>
                </tr>
                <tr>
                    <th colspan="4">Фамилия</th><td><?php echo $_SESSION['sur_name']; ?></td>
                </tr>
                <tr>
                    <th colspan="4">Факултетен номер</th><td><?php echo $_SESSION['IN_number']; ?></td>
                </tr>
                <tr>
                    <th colspan="4">Адрес</th><td><?php echo $_SESSION['addres']; ?></td>
                </tr>
                <tr>
                    <th colspan="4">Телефонен номер</th><td><?php echo $_SESSION['phone_number']; ?></td>
                </tr>
                <tr>
                    <th colspan="4">е-поща</th><td><?php echo $_SESSION['email']; ?></td>
                </tr>
            </table>
        </div>


        <div id="assessment" class="w3-container w3-border sis">
            <h2>Оценки</h2>
            <p><?php echo "Оценки на: " . $_SESSION['first_name'] ?></p>
            <?php 
            include_once 'assessment_student.php'; ?>

        </div>

        <script>
            function tab(evt, tab) {
                var i, x, tablinks;
                x = document.getElementsByClassName("sis");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                }
                document.getElementById(tab).style.display = "block";
                evt.currentTarget.className += " w3-red";
            }
        </script>

    </body>
</html>
