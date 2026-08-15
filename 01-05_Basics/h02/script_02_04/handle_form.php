<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
    <style>
        .error {
            font-weight: bold;
            color: #C00;
        }
    </style>
</head>

<body>
    <?php # Script 2.4 - handle_form.php #3

    // This script receives the values from form.html and displays them.

    // Check for a name value:
    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    } else { // Forgot to enter name.
        $name = NULL;
        echo '<p class="error">You forgot to enter your name!</p>';
    }

    // Check for an email value:
    if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else { // Forgot to enter email.
        $email = NULL;
        echo '<p class="error">You forgot to enter your email!</p>';
    }

    if (!empty($_REQUEST['comments'])) {
        $comments = $_REQUEST['comments'];
    } else { // Forgot to enter comments.
        $comments = NULL;
        echo '<p class="error">You forgot to enter your comments!</p>';
    }


    // Check for a gender value:
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
        if ($gender == 'M') {
            $greeting = "<p><b>Good day, Sir!</b></p>\n";
        } elseif ($gender == 'F') {
            $greeting = "<p><b>Good day, Madam!</b></p>\n";
        } else { // Invalid gender value.
            $gender = NULL;
            echo '<p class="error">Gender should be either "M" or "F"!</b></p>\n';
        }
    } else { // Forgot to select a gender.
        $gender = NULL;
        echo '<p class="error">You forgot to select your gender!</p>';
    }

    // If everything is OK, print the message:
    if($name && $email && $gender && $comments) { 

        echo "<p>Thank you, <b>$name</b>, for the following comments: <br>
        <tt>$comments</tt></p>
        <p>We will reply to you at <i>$email</i>.</p>\n";
        echo $greeting;

    } else { // missing form value.
        echo '<p class="error">Please go back and fill out the form again.</p>';
    }

    ?>

</body>

</html>