<?php
session_start();
include ('connect.php');
//include ('dbMySql.php');

class administrator {

    public function insert($fname, $lname, $city) {
        $res = mysql_query("INSERT INTO users(first_name,sur_name,ID_city) VALUES('$fname','$lname','$city')");
        return $res;
    }

    public function insert_old($fname, $lname, $city) {
        $res = mysql_query("INSERT INTO users(first_name,sur_name,user_city) VALUES('$fname','$lname','ID_city')");
        return $res;
    }

    public function insertnew($fname, $mname, $sname, $fn, $city, $addres, $phone, $email, $status, $role) {
        $res = mysql_query("INSERT INTO `users`(`first_name`, `midle_name`, `sur_name`, `IN_number`, `ID_city`, `addres`, `phone_number`, `email`, `status_user`,`ID_role`) VALUES ('$fname','$mname','$sname','$fn','$city','$addres','$phone','$email','$status','$role')");
        return $res;
    }

}
?>