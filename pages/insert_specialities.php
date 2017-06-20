<?php
include_once ('specialitiesClass.php');
include_once ('facultyClass.php');
include_once ('connect.php');
$con = new specialities();
// data insert code starts here.
if (isset($_POST['btn-save'])) {
    $name = $_POST['name'];
    $faculty = $_POST['faculty'];

    $res = $con->insertspecialities($name, $faculty);
    if ($res) {
        ?>
        <script>
            alert('Записа е добавен...');
            window.location = 'specialities.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Проблем при записа на данни...');
            window.location = 'specialities.php'
        </script>
        <?php
    }
}
// data insert code ends here.
?>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>SP</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
    <div id="header">
        <div id="content">
            <label>Въвежданe на специалност</label>
        </div>
    </div>
    <div id="body">
        <div id="content">
            <form method="post">
                <table align="center">
                    <tr>
                        <td><input type="text" name="name" placeholder="Специалност" required /></td>
                    </tr>
                    <tr>                        
                        <td><select name="faculty_id" placeholder="Изберете факултет" <?php
                            $sql = mysql_query("SELECT id,name FROM faculty");
                            if (mysql_num_rows($sql)) {
                                $select = '<select name="select">';
                                while ($rs = mysql_fetch_array($sql)) {
                                    $select.='<option value="' . $rs['id'] . '">' . $rs['name'] . '</option>';
                                }
                            }
                            $select.='</select>';
                            echo $select;
                            ?> </select></td>                            
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="btn-save"><strong>Запамети</strong></button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</center>
</body>
</html>