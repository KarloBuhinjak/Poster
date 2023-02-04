<?php
$request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
$id = $request['id'];
$title = $request['title1']; //employee ID we are using it to get the employee record
$post = $request['post1']; //get the date of birth from collected data above


$servername = "localhost"; //set the servername
$username = "root"; //set the server username
$password = ""; // set the server password (you must put password here if your using live server)
$dbname = "test"; // set the table name

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Set the INSERT SQL data
$sql = "UPDATE postss SET title='".$title."', post='".$post."'  WHERE id='".$id."'";

// Process the query so that we will save the date of birth
if ($mysqli->query($sql)) {
    echo "Employee has been sucessfully updated.";
} else {
    return "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close the connection after using it
$mysqli->close();
?>