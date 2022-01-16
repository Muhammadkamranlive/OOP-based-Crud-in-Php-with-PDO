<?php

class Dbconnection
{
     private $dbconnection;

     public  function  __construct()
     {
         $this->dbconnection=new PDO('mysql:host=localhost;dbname=birds','root','');
         if(!$this->dbconnection){
             die('connection failed');
         }
     }

     // insert record
    public  function insert($arrayData)
    {
        $data=$this->dbconnection->prepare('insert into users (username,password,email) values (?,?,?)');
        $data->execute($arrayData);
        if($data->rowCount()){
            echo "record has been added";
        }



    }
     // display
    public  function  display(){

         $data= $this->dbconnection->query('select * from users ');
          $rows=$data->fetchAll();
          return $rows;

    }
    // delete
    public  function  delete($id){
         $data=$this->dbconnection->prepare('delete from users where id=?');
         $data->execute($id);
         if($data->rowCount()){
             echo 'delete successfully';
         }
    }
    //search
    public  function  search($id){
         $data=$this->dbconnection->query("select * from users where id=$id");
         $row=$data->fetch();
         return $row;

    }

    public function  update($username,$pass,$email,$id){
         $data= $this->dbconnection->query("UPDATE users set username='$username',password='$pass',email='$email' where id=$id ");
         if($data->rowCount()){
             echo "updated successfully";
         }
    }
}