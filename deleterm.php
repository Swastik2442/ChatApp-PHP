<!-- Script for Deleting a Chat Room -->

<?php

// Connection to the Database
include 'db_connect.php';

// Setting the Variables
$room = $_POST['room'];
$sql1 = "DELETE FROM msgs WHERE `msgs`.`room` = '$room'";
$sql2 = "DELETE FROM rooms WHERE `rooms`.`sname` = '$room'";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

// Returning the User to Home Page
$message = "The room " . $room . " has been deleted.";
echo '<script language="javascript">';
echo 'alert("' .$message. '");';
echo 'window.location="https://localhost/chatapp-php";';
echo '</script>';

mysqli_close($conn);

?>