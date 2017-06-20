<?php

global $link;
$link= mysqli_connect("localhost", "l1stuche_kamen", "Presiqn11", "l1stuche_sis");

if (!$link) {
    echo "Грешка: Не мога да се свържа с базата данни." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Успех: Успешна връзка с базата данни." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>
