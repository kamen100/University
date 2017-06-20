<?php
session_start();
include_once 'connect.php';

class administrator {

    public function insert($fname, $lname, $city) {
        $res = mysql_query("INSERT users(first_name,midle_name,sur_name,phone_number,email,status_user,adres,user_city) VALUES('$fname','$mname','$sname','$city','$addres','$phone','$email','$status','$role')");
        return $res;
    }

    public function insertnew($fname, $mname, $sname, $fn, $city, $addres, $phone, $email, $status, $role) {
        $res = mysql_query("INSERT INTO `users`(`first_name`, `midle_name`, `sur_name`, `IN_number`, `ID_city`, `addres`, `phone_number`, `email`, `status_user`,`ID_role`) VALUES ('$fname','$mname','$sname','$fn','$city','$addres','$phone','$email','$status','$role')");
        return $res;
    }

}
