<?php

class specialities{

    public function insert($name, $faculty_id){
        $res=  mysql_query("INSERT INTO `specialities`(`name`, `faculty_id`) VALUES ($name,$faculty_id)");
        return $res;        
    }
    public function select(){
        $res=  mysql_query($query);
    }
    
}
