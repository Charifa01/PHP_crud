<?php
    include "connection_file.php";
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST["phone"];
    $query ="INSERT INTO `crudl`( `name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
    $result = mysqli_query($connect,$query);
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
    <form action="" method="post">
        <h1>Update Member</h1>
        <input type="text" name="nom" placeholder="write your name">
        <input type="email" name="email" placeholder="write your email">
        <input type="text" name="phone" placeholder="write your phone number">
        <input type="submit" value="Submit">
        <input type="button" value="Cancel" name="cancel">
    </form>
</body>
</html>
