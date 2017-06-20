<?php
include_once ('connect.php');
$con = new DB_con();
$table = "specialities";

class specialities extends DB_con{

    public function insertspecialities($name, $faculty_id){
        $res=  mysql_query("INSERT INTO `specialities`(`name`, `faculty_id`) VALUES ($name,$faculty_id)");
        return $res;        
    }
    public function selectspecialities(){
        $res=  mysql_query("SELECT specialities.id, specialities.name, faculty.name FROM specialities INNER JOIN faculty ON specialities.faculty_id=faculty.id ORDER BY 'id' DESC");
		return $res;
    }
    
}
