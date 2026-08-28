<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Feedback</title>
</head>

<body>
    <?php # Script 2.5 - handle_form.php #4

    // This script receives the values from form.html and displays them.

    // Validate the form data and print out the values if valid.:
    if (!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])) {
        echo '<p>Thank you, <b>' . $_POST['name'] . '</b>, for the following comments:<br>
        <tt>' . $_POST['comments'] . '</tt></p>
        <p>We will reply to you at <i>' . $_POST['email'] . '</i>.</p>';
    } else { // Invalid submitted values.
        echo '<p>Please go back and fill out the form again.</p>';
    }
    ?>
</body>

</html>