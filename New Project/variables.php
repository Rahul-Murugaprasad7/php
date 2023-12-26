<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: serif;
        }
    </style>
</head>
<body>
    <?php
    $name = "RAHUL";
    $confirm = false;

    if ($confirm){
        $name1 = "Yes, I am $name";

    }

    else{
        $name1 = "No, Am NOT $name";
    }

    ?>
    <h1>
        <?php echo $name1; ?>

        <!-- <?= $name1?> -->
    </h1>
</body>
</html>