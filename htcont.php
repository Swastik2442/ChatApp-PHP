<!-- Script for Adding HTML to Room Page -->

<?php

// Connection to Database
include 'db_connect.php';

// Setting the Variables
$room = $_POST['room'];
$res = "";

// Querying the Messages & Adding HTML
$sql = "SELECT msg, ip, stime FROM msgs WHERE room = '$room'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        $timevar = "";
        if (substr($row['stime'], -8, -6) > 12)
        {
            $timevar .= (int)substr($row['stime'], -8, -6) - 12 . ":";
            $ampm = "PM";
        }

        else
        {
            $timevar .= substr($row['stime'], -8, -6) . ":";
            $ampm = "AM";
        }
        $timevar .= substr($row['stime'], -5, -3) . " " . $ampm;
        $res = $res . '<div class="container-msg">';
        $res = $res . '<p style="color: #999">';
        $res = $res . $row['ip'];
        $res = $res . ' ~</p> <p class="chat-msg">' . $row['msg'];
        $res = $res . '</p> <span class="time-right">' . $timevar . '</span></div>';
    }
}
echo $res;

?>