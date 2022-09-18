<!-- Script for Posting the User's Message -->

<?php

// Connection to Database
include 'db_connect.php';

// Setting the Variables
$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

// Querying the Message to Database
$sql = "INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`) VALUES ('$msg', '$room', '$ip', current_timestamp());";
mysqli_query($conn, $sql);
mysqli_close($conn);

?>