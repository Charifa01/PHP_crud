<?php 
  include "connection_file.php";
  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `crudl` WHERE id = $id";
        $query = mysqli_query($connect,$sql);
        while ($row = mysqli_fetch_assoc($query)){
            $name = $row["name"];
            $email = $row["email"];
            $phone = $row["phone"]; 
        }
      }
  }else{
    $id = $_POST['id'];
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST["phone"];
    $sql= "UPDATE `crudl` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE `id`='$id'";
    $result = mysqli_query($connect, $sql);
if (!$result) {
    die('Error: ' . mysqli_error($connect));
}
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add New</title>
</head>
<body>
<nav class="navbar" >
    <div class="continair">
        <a href="index.php" class="title">PHPcrud</a>
        <div class="main">
            <ul>
                <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="create.php" class="nav-link">AddNew</a></li>
            </ul>
        </div>
    </div>
    </nav>
    <form method="POST">
        <h1>Update Member</h1>
        <input type="text" name='id' value='<?php echo $id?>'>
        <input type='text' name='nom' value='<?php echo $name?>' >
        <input type='email' name='email' value='<?php echo $email?>'>
        <input type='text' name='phone' value='<?php echo $phone ?>'>
         <input type="submit" value="EDIT">
        <input type="button" value="Cancel" name="cancel">
    </form>
</body>
</html>
