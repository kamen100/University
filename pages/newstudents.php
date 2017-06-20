<?php
//include_once 'newconnect.php';


class newstudents {
    public function select() {
        $res = ("SELECT * FROM users");
        $query= mysqli_query($link, $res);
        return $query;
    }
}