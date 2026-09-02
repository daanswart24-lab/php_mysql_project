<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays</title>
</head>

<body>
    <table border="0" cellspacing="3" align="center">
        <tr>
            <td>
                <h2>Rating</h2>
            </td>
            <td>
                <h2>Title</h2>
            </td>
        </tr>
        <?php # Script 2.8 - sorting.php

        // This script demonstrates how to sort an associative array.

        // Create the array of movies and their ratings:
        $movies = array(
            'Casablanca' => 10,
            'To Kill a Mockingbird' => 10,
            'The English Patient' => 2,
            'Stranger than Fiction' => 9,
            'Story of the Weeping Camel' => 5,
            'Donnie Darko' => 7
        );

        // Display the movies in their original order:
        echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
        foreach ($movies as $title => $rating) {
            echo "<tr><td>$rating</td>
            <td>$title</td></tr>\n";
        }

        // Sort the array alphabetically by title:
        ksort($movies);
        echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
        foreach ($movies as $title => $rating) {
            echo "<tr><td>$rating</td>
            <td>$title</td></tr>\n";
        }

        // Sort the array in reverse order by rating:
        arsort($movies);
        echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
        foreach ($movies as $title => $rating) {
            echo "<tr><td>$rating</td>
            <td>$title</td></tr>\n";
        }

        ?>
    </table>
</body>

</html>