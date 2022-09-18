<!-- Script for Creating the Chat Room -->

<?php

// Setting the Variables
$room = $_POST['room'];
$sql = "SELECT * FROM `rooms` WHERE sname = '$room'";

// Room Name Error Catching
if (strlen($room)<2 or strlen($room)>20)
{
    $message = "Please choose a name between 2 to 20 characters!";
    echo '<script language="javascript">';
    echo 'alert("' .$message. '");';
    echo 'window.location="https://localhost/chatapp-php";';
    echo '</script>';
}

else if (!ctype_alnum($room))
{
    $message = "Please choose an alphanumeric name!";
    echo '<script language="javascript">';
    echo 'alert("' .$message. '");';
    echo 'window.location="https://localhost/chatapp-php";';
    echo '</script>';
}

else
{
    include 'db_connect.php';
}

$result = mysqli_query($conn, $sql);

// Room Existance Error Catching
if ($result)
{
    if (mysqli_num_rows($result) > 0)
    {
        $message = "Please choose a different room name! This one is already taken.";
        echo '<script language="javascript">';
        echo 'alert("' .$message. '");';
        echo 'window.location="https://localhost/chatapp-php";';
        echo '</script>';
    }

    else
    {
        $sql = "INSERT INTO `rooms` (`sname`, `stime`) VALUES ('$room', current_timestamp());";
        if (mysqli_query($conn, $sql))
    {
            $message = "Your Room is ready to Chat.";
            echo '<script language="javascript">';
            echo 'alert("' .$message. '");';
            echo 'window.location="https://localhost/chatapp-php/rooms.php?roomname=' .$room. '";';
            echo '</script>';
    }
    }
}

else
{
    echo "Error: " .mysqli_error($conn);
}

mysqli_close($conn);

?>