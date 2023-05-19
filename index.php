<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <title>PHPcrud</title>
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
        <div class="continair">
        <table>
        <thead>
        <tr class="row_1">
        <th style="with=10px">ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Join Date</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        include "connection_file.php";
        $sql = "SELECT * FROM crudl";
        $result = mysqli_query($connect,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[join_date]</td>
                <td>
                    <a href='edit.php?id=$row[id]'><button class='Edit'>Edit</button></a>
                    <a href='delete.php?id=$row[id]'><button class='delet'>Delete</button></a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
        </table>
        <div class="add">
        <a href="create.php"><button class="add_new">Add New<span>+</span></button></a> 
        </div>
        
        </div>
    
</body>

</html>
