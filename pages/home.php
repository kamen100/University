<?php
$con = mysqli_connect("localhost", "l1stuche_kamen", "Presiqn11");
$dbname = 'l1stuche_sis';
$sel_db = mysqli_select_db($con,$dbname);
$sel_charset = mysqli_set_charset($con,'utf8');
if (isset($_POST['bttLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE ID_user='$username' AND IN_number='$password' ";
    $result = mysqli_query($con,$query);
    while ($red = mysqli_fetch_row($result)) {
        $_SESSION['ID_user'] = $username;
        $_SESSION['IN_number'] = $password;
        $_SESSION['midle_name'] = $red[2];
        $_SESSION['sur_name'] = $red[3];
        $_SESSION['first_name'] = $red[1];
        $_SESSION['user_ID'] = $red[0];
        $_SESSION['addres'] = $red[6];
        $_SESSION['phone_number'] = $red[7];
        $_SESSION['email'] = $red[8];
        $role_user = $red[11];
        if ($role_user == 1) {
            header('Location:index.php?page=user');
        } else if ($role_user == 2) {
            header('Location:index.php?page=frondoffice');
        } else if ($role_user == 3) {
            header('Location:index.php?page=docent');
        } else {
            header('Location:index.php?page=sory');
        }
    }
}
?>
<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style_table.css" type="text/css" />
    <link rel="stylesheet" href="v.css" type="text/css" />
</head>
<div id="top">
    <h1 align="center" id="h1" >Вход в Университетската информационна система.</h1>
</div>
<form method="post" >
    <table align="center">
        <tr>
            <td><input type="text" name="username" placeholder="Потребителско име" ></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Парола"></td>
        </tr>
        <tr>

            <td><input type="submit" name="bttLogin" value="Вход" id="button"></td>
        </tr>
    </table>
</form>
<table align="center">
    <tr>
        <td>Тест СТУДЕНТ</td>&nbsp;
        <td>  Потребителско име: 3</td>&nbsp;
        <td>  Парола: 1</td>&nbsp;
    </tr>
    <tr>
        <td>Тест ADMINISTRATOR  </td>&nbsp;
        <td>  Потребителско име: 9</td>&nbsp;
        <td>  Парола: 1</td>&nbsp;
    </tr>
</table>
