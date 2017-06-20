<?php
include_once '../classes/administrator.php';
$con = new administrator();

// data insert code starts here.
if(isset($_POST['btn-save']))
{
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $city = $_POST['user_city'];
 
 $res=$con->update($fname,$lname,$city);
 if($res)
 {
  ?>
  <script>
  alert('Записа е Променен...');
        window.location='students.php'
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('Проблем при записа на данни...');
        window.location='students.php'
        </script>
  <?php
 }
}
// data insert code ends here.
?>
        
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Промяна на данни за студент</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Промяна на данни за студент</label>
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
    <td><input type="text" name="user_city" placeholder="Град" required /></td>
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