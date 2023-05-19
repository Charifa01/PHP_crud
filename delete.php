<?php
include "connection_file.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "DELETE FROM `crudl` where id = $id";
mysqli_query($connect,$sql);
}
 header('localhost/phpcrud/index.php');
 exit;
