<?php
include_once ('administrator.php');
include_once ('connect.php');
$con = new DB_con();
// data insert code starts here.
if (isset($_POST['btn-save'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $city = $_POST['user_city'];

    $res = $con->insert($fname, $lname, $city);
    if ($res) {
        ?>
        <script>
            alert('Записа е добавен...');
            window.location = 'students.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Проблем при записа на данни...');
            window.location = 'students.php'
        </script>
        <?php
    }
}
// data insert code ends here.
?>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Въвежданe на студент</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
    <div id="header">
        <div id="content">
            <label>Въвежданe на студент</label>
        </div>
    </div>
    <div id="body">
        <div id="content">
            <form method="post">
                <table align="center">
                    <tr>
                        <td><input type="text" name="first_name" placeholder="Име" required /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="last_name" placeholder="Фамилия" required /></td>
                    </tr>
                    <tr>
                        <td><select name="user_city" placeholder="Изберете Град" <?php
                            $sql = mysql_query("SELECT ID_City,City_name FROM cities");
                            if (mysql_num_rows($sql)) {
                                $select = '<select name="select">';
                                while ($rs = mysql_fetch_array($sql)) {
                                    $select.='<option value="' . $rs['ID_City'] . '">' . $rs['City_name'] . '</option>';
                                }
                            }
                            $select.='</select>';
                            echo "Изберете Град";
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