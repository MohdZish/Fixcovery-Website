<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
session_start();

$link = mysqli_connect("localhost", "root", "", "fixcovery");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$post_title = mysqli_real_escape_string($link, $_REQUEST['post_title']);
$post_body = mysqli_real_escape_string($link, $_REQUEST['hiddeneditor']);


echo ($post_body);
// Attempt insert query execution
$sql = "INSERT INTO posts (username, title, body) VALUES ('".$_SESSION['username']."','$post_title', '$post_body')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>