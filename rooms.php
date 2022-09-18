<!-- The Back-End -->
<?php

// Connection to Database
include 'db_connect.php';

// Setting the Variables
$roomname = $_GET['roomname'];
$sql = "SELECT * FROM `rooms` WHERE sname = '$roomname'";
$result = mysqli_query($conn, $sql);

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
{
    $url = "https://"; 
} 
           
else
{
    $url = "http://"; 
}
              
$url.= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Error Catching
if ($result)
{
    if (mysqli_num_rows($result) == 0)
    {
        $message = "This room does not exist. Try creating a new one.";
        echo '<script language="javascript">';
        echo 'alert("' .$message. '");';
        echo 'window.location="https://localhost/chatapp-php";';
        echo '</script>';
    }
}

else
{
    echo "Error: " .mysqli_error($conn);
}
mysqli_close($conn);

?>

<!-- The Front-End -->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChatApp-PHP - <?php echo $roomname; ?></title>

    <link rel="icon" href="img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/mybootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="ChatApp">
            <img src="img/favicon.ico" alt="ChatApp - PHP" height="24" width="24">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="./index.php#home">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="./index.php#about">About</a>
        <a class="py-2 d-none d-md-inline-block" href="./index.php#contact">Contact</a>
        <a class="py-2 d-none d-md-inline-block" href="./index.php#chat">Chat</a>
        </nav>
    </header>

    <main class="chat">
        <h2 align="Center">Chat Room - <?php echo $roomname; ?></h2>
        <div class="chat-scroll">
            <!-- The Chats come Here -->
        </div>
        <br>
        <input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add Message"><br>
        <button type="button" class="btn btn-outline-primary" name="submitmsg" id="submitmsg">Send</button>
        <div style="float: right;">
            <button type="button" class="btn btn-outline-secondary" name="sharerm" id="sharerm" onclick="shareRoom()">Share Room</button>
            <button type="button" class="btn btn-outline-danger" name="deleterm" id="deleterm">Delete Room</button>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // Checking for new Messages
        setInterval(runFunction, 1000);
        function runFunction()
        {
            $.post("htcont.php", {room: '<?php echo $roomname; ?>'},
            function(data, status)
            {
                document.getElementsByClassName('chat-scroll')[0].innerHTML = data;
            })
        };

        // Use Enter Key to Press Send Button - Source: W3Schools
        var input = document.getElementById("usermsg");
        input.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("submitmsg").click();
            }
        });

        // Submit the User Message to mySQL Database
        $("#submitmsg").click(function() {
            var clientmsg = $("#usermsg").val();
        $.post("postmsg.php", {text: clientmsg, room: '<?php echo $roomname; ?>', ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'},
            function(data, status) {
                document.getElementsByClassName('chat-scroll')[0].innerHTML = data;});
            $("#usermsg").val("");
        return false;
        });

        // Getting the Room Link to Share
        function shareRoom() {
            var copyText = '<?php echo $url; ?>';
            navigator.clipboard.writeText(copyText);
            alert("Now, Share the Copied Room Link");
        }

        // Deleting the Room
        $("#deleterm").click(function() {
            var clientmsg = $("#usermsg").val();
        $.post("deleterm.php", {room: '<?php echo $roomname; ?>'});
    });

    </script>
</body>
</html>