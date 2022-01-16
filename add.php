<?php

require_once ('Dbconnection.php');
$obj= new Dbconnection();

if(isset($_POST['submit'])){
    $data=array($_POST['username'],$_POST['password'],$_POST['email']);
    $obj->insert($data);
}
?>