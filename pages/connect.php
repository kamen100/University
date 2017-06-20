<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'l1stuche_kamen');
define('DB_PASS', 'Presiqn11');
define('DB_NAME', 'l1stuche_sis');


class DB_con {
    

    public function __construct() {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die('localhost connection problem' . mysql_error());
        mysqli_select_db($conn,DB_NAME);
        mysqli_set_charset($conn, 'utf8');
    }
    public function select() {
        
        $query=("SELECT * FROM users");
        $res = mysqli_query($this->conn, $query);
        return $res;
    }
	/*public function select(){
		$res = mysql_query("SELECT * FROM users ORDER BY user_id DESC LIMIT 50");
		return $res;
	}*/
    public function select_role_user($username, $password) {
        $res = mysql_query("SELECT * FROM users WHERE ID_user='$username' AND IN_number='$password' ");
        return $res;
    }
	public function selectnew() {
		$res=mysql_query("SELECT users.ID_user, users.first_name, users.sur_name, cities.City_Name FROM users INNER JOIN cities ON users.ID_city=cities.ID_City ORDER BY `ID_user` DESC");
		return $res;
	}
	public function dropdown(){
                        // 
                        //$smt = $connection->prepare("SELECT id_city ,name_city FROM city");
                        //$sstmt = $db_con->prepare("SELECT * FROM city, departament, position");                        
                        //$data = $ssmt->fetch(PDO::FETCH_ASSOC);
                        //                        
                        //$sstmt->execute();
                        //
                        /*foreach ($data as $row2): ?> 
                       <?php echo $row2["name_city"] ?></option>
                        <?php endforeach */
	}
 //class administrator {

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