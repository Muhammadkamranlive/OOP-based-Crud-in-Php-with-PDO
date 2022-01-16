<?php
    require_once ('Dbconnection.php');
    $obj= new Dbconnection();

    if(isset($_POST['submit'])){
        $data=array($_POST['username'],$_POST['password'],$_POST['email']);
        $obj->insert($data);
    }

    $rows=$obj->display();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .form-control{
            border-radius: 20px !important;
        }
        .btn{
            border-radius: 20px !important;
        }
        .card{
            border-radius: 20px !important;
        }
    </style>
</head>
<body>
         <div class="container p-5 m-5">
            <div class="card shadow p-5 m-5">
                <center>
                    <h1>Add record Page</h1>
                    <form action="add.php" method="post">
                        <input type="text" name="username" placeholder="username" class="form-control">
                        <br>
                        <br>
                        <input type="text" name="email" placeholder="email"  class="form-control">
                        <br>
                        <br>
                        <input type="text" name="password" placeholder="password"  class="form-control">
                        <br><br>
                        <input type="submit" value="Add record" name="submit" class="btn btn-primary shadow">
                    </form>
                </center>
            </div>
         </div>

        <center>
            <table class="table">
                <tr>
                    <td>username</td>
                    <td>email</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>

                <tbody>
                <?php
                   foreach ($rows as $list){

                       echo  "<tr>";
                       echo  "<td>$list[1]</td>";
                       echo  "<td>$list[3]</td>";
                       echo  "<td><a href='del.php?id=$list[0]'>Delete</a></td>";
                       echo  "<td><a href='update.php?id=$list[0]'>update</a></td>";
                       echo "</tr>";
                   }
                ?>
                </tbody>
            </table>
        </center>
</body>
</html>
