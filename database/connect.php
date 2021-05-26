<?php

class connect{
    static public function connect(){

    $user="root";
    $pass="";

    $conn = new PDO('mysql:host=localhost;dbname=bivago', $user, $pass);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    return $conn;

    }
}
?>
