<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        select{
            margin-right: 2px;
        }
    </style>
</head>

<body>
    <?php # Script 2.6 - calendar.php 

    // This script displays a form with three drop-down menus: month, day, and year.

    // Create the months array:
    $months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    // Make the month drop-down menu:
    echo '<select name="month">';
    foreach ($months as $key => $value) {
        echo "<option value=\"$key\">$value</option>";
    }
    echo '</select>';

    // Make the day drop-down menu:
    echo '<select name="day">';
    for ($day = 1; $day <= 31; $day++) {
        echo "<option value=\"$day\">$day</option>\n";
    }
    echo '</select>';

    // Make the year drop-down menu:
    echo '<select name="year">';
    for ($year = 2016; $year <= 2026; $year++) {
        echo "<option value=\"$year\">$year</option>\n";
    }
    echo '</select>';

    ?>