<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
<h1>Movies</h1>

<?php
    $movies = [
        "abc",
        "def",
        "ghi"
    ];
?>

    <ul>
        <?php foreach ($movies as $movie){
        echo"<li>$movie</li>";    //echo "<li>".$movie."</li>";
        }
        ?>

        <!-- <?php foreach ($movies as $movie) : ?>
            <li>Hello</li>
        <?php endforeach; ?> -->



    </ul>
</body>
</html>