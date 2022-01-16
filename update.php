<?php
require_once ('Dbconnection.php');
 $obj= new Dbconnection();
 $id=array($_GET['id']);
 $data=$obj->search($_GET['id']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Update record Page</h1>
    <form action="updated.php" method="post">
        <input type="hidden"  name="id" value="<?php echo $data['0']?>">
        <input type="text" name="username" placeholder="username"  value="<?php echo $data['1']  ?>" >
        <br>
        <br>
        <input type="text" name="email" placeholder="email" value="<?php echo $data['3']  ?>">
        <br>
        <br>
        <input type="text" name="password" placeholder="password" value="<?php echo $data['2']  ?>">
        <br><br>
        <input type="submit" value="Add record" name="submit">
    </form>
</center>
</body>
</html>
