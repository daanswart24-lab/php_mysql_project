<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>

<body>
    <?php # Script 2.3 - handle_form.php #2

    // This script receives the values from form.html and displays them.

    // Create a shorthand version of the submitted data:
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];

    // Check for a gender value and create a shorthand version:
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = NULL;
    }

    // Print the submitted information:
    echo "<p>Thank you, <b>$name</b>, for the following comments: <br>
    <tt>$comments</tt></p>
    <p>We will reply to you at <i>$email</i>.</p>\n";

    // Print a message based upon the gender value:
    if ($gender == 'M') {
        echo "<p><b>Good day, Sir!</b></p>\n";
    } elseif ($gender == 'F') {
        echo "<p><b>Good day, Madam!</b></p>\n";
    } else {
        echo "<p> <b>You forgot to enter your gender!</b></p>\n";
    }

    ?>
</body>

</html>