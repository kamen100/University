<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'l1stuche_kamen');
define('DB_PASS', 'Presiqn11');
define('DB_NAME', 'l1stuche_sis');

class DB_con {

    function __construct() {
        $conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('localhost connection problem' . mysql_error());
        mysql_select_db(DB_NAME, $conn);
        mysql_set_charset('utf8', $conn);
    }

    public function select() {
        $res = mysql_query("SELECT * FROM users");
        return $res;
    }

    public function select_role_user($username, $password) {
        $res = mysql_query("SELECT * FROM users WHERE ID_user='$username' AND IN_number='$password' ");
        return $res;
    }

}
