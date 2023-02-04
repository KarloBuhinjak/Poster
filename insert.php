<?php
session_start();
$title1 = $_POST['title1'];
$post1 = $_POST['post1'];
$user_name = $_SESSION['user_name'];
$conn = mysqli_connect("localhost", "root", "", "test");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO postss (user_name,title, text) VALUES ('$user_name', '$title1', '$post1')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
header("Location: index.php");
exit();