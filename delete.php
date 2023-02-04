<?php

$connection =  mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'test');

if(isset($_POST['delete'])){
    $id  = $_POST['id'];

    $query = "DELETE FROM postss WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
}

if($query_run){
    header("location: index.php");
}