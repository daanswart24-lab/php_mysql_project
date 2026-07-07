<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefined Variables</title>
</head>
<body>
    <?php # Script 1.5 - predefined.php
    
    // Create a shorter variable name for the predefined variables:
    $file = $_SERVER['SCRIPT_FILENAME'];
    $user = $_SERVER['HTTP_USER_AGENT'];
    $server = $_SERVER['SERVER_SOFTWARE'];

    // Print the name of the file:
    echo "<p>You are running the file:<br><b>$file</b></p>\n"; 

    // Print the user agent:
    echo "<p>Your are viewing this page using:<br><b>$user</b></p>\n";
    
    // Print the server software:
    echo "<p>This server is running:<br><b>$server</b></p>\n";

    ?>
</body>
</html>