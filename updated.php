<?php
require_once ('Dbconnection.php');
$obj= new Dbconnection();
$obj->update($_POST['username'],$_POST['password'],$_POST['email'],$_POST['id']);
header('Location:index.php');