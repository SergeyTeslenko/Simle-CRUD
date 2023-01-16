<?php
include "database_connection.php";

$id=$_GET['id'];
$sql ="DELETE FROM `crud` WHERE id = $id";
$result = mysqli_query($database, $sql);
if ($result){
    header("location: index.php");
}
else
{
    echo "Failed" . mysqli_connect_error($database);
}
?>