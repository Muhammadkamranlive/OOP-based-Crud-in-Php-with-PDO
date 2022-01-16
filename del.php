<?php
require_once ('Dbconnection.php');
 $obj= new Dbconnection();
 $id=array($_GET['id']);
 $obj->delete($id);
header('Location:index.php');

?>