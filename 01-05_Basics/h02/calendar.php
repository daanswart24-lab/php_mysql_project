<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>
<body>
    <?php # Script 2.6 - calendar.php 

    // This script displays a form with three drop-down menus: month, day, and year.

    // Create the months array:
    $months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    // Create the day arrays:
    $day = range(1, 31);

    // Create the year array:
    $year = range(2016, 2026);

     // Make the month drop-down menu:
    echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "<option value=\"$key\">$value</option>";
    }
    echo '</select>';

    // Make the day drop-down menu:
    echo '<select name="day">';
    foreach ($day as $value) {
        echo "<option value=\"$value\">$value</option>";
    }
    echo '</select>';
    
    // Make the year drop-down menu:
    echo '<select name="year">';
    foreach ($year as $value) {
        echo "<option value=\"$value\">$value</option>";
    }
    echo '</select>';
    ?>