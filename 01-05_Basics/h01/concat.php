<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenation</title>
</head>
<body>
    <?php # Script 1.7 - concat.php

    // This script demonstrates the use of concatenation.

    // Create some variables:
    $first_name = 'Haruki';
    $last_name = 'Murakami';
    $author = $first_name . ' ' . $last_name;
    $book = 'Kafka on the Shore';

    // Print a message:
    echo "<p>The book <em>$book</em> was written by $author.</p>";
    
    ?>