<?php

$mysqli = require __DIR__ . "/database.php";
if(isset($_POST['delete'])){
    $id  = $_POST['id'];

    $query = "DELETE FROM post WHERE id='$id'";
    $query_run = mysqli_query($mysqli, $query);
}

if($query_run){
    header("location: index.php");
}