<?php
//session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'l1stuche_kamen');
define('DB_PASS', 'Presiqn11');
//define('DB_NAME', 'dbtuts1');
define('DB_NAME', 'l1stuche_sis');

class DB_con {

    /*function __construct() {
        $conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('localhost connection problem' . mysql_error());
        mysql_select_db(DB_NAME, $conn);
        mysql_set_charset('utf8', $conn);
    }*/

    public function delete($id) {
        $res = mysql_query("DELETE FROM `users` WHERE `user_id`=$id");
        return $res;
    }

    public function select() {
        $res = mysql_query("SELECT * FROM users ");
        return $res;
    }

    public function select2() {
        //$res=mysql_query("SELECT users.first_name, users.midle_name, users.sur_name,  users.IN_number,  users.addres, users.phone, users.email,city.City_Name FROM users INNER JOIN city ON users.ID_city=city.id_city WHERE ['ID_user']=$_SESSION['$username']");
        return $res;
    }

    public function update($id) {
        $res = mysql_query("UPDATE users SET (first_name,last_name,user_city WHERE `user_id`=$id");
        return $res;
    }

    public function selectnew() {
        //$res2=mysql_query("SELECT users.user_id, users.first_name, users.last_name, city.City_Name FROM users INNER JOIN city ON users.city_id=city.id_city");
        return $res2;
    }

}
?>