<?php
session_start();
include_once 'connect.php';
//$_SESSION['first_name'];
//$_SESSION['user_ID'];
?>
<!DOCTYPE html>

<title>СИС</title><h1>Страница на Доцентите</h1>

<?php
echo "Здравей: " .$_SESSION['first_name']?>