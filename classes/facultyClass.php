<?php

class facultyClass {
    public function insert($name){
        $res=  mysql_query('INSERT INTO `faculty`(`name`) VALUES ($name)');
        return $res;
    }
    public function selectnew(){
        $res=  mysql_query('SELECT * FROM `faculty`');
        return $res;
    }
}
