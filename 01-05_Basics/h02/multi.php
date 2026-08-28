<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>

<body>
    <p>Some North American States, Provinces, and Territories:</p>
    <?php # Script 2.7 - multi.php

    // This script creates and outputs a multidimensional array.

    // Create the array for Mexico:
    $mexico = array(
        'YU' => 'Yucatán',
        'BC' => 'Baja California',
        'OA' => 'Oaxaca',
    );

    // Create the array for the United States:
    $us = array(
        'MD' => 'Maryland',
        'IL' => 'Illinois',
        'PA' => 'Pennsylvania',
        'IA' => 'Iowa',
    );

    // Create the array for Canada:
    $canada = array(
        'QC' => 'Quebec',
        'AB' => 'Alberta',
        'NT' => 'Northwest Territories',
        'YT' => 'Yukon',
        'PE' => 'Prince Edward Island',
    );

    // Create the multidimensional array:
    $n_america = array(
        'Mexico' => $mexico,
        'United States' => $us,
        'Canada' => $canada,
    );

    // Output the multidimensional array:
    foreach ($n_america as $country => $list) {
        echo "<h2>$country</h2><ul>";
        foreach ($list as $k => $v) {
            echo "<li>$k - $v</li>\n";
        }
        echo '</ul>';
    } // End of the main foreach loop.

    ?>


</body>

</html>