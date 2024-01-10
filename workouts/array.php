<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended PLace</h1>


    <?php
        $places = [
            "Bali",
            "Leh",
            "Maldhivs"
        ]
    ?>

    <ul>
        <?php foreach ($places as $place){                  /*foreach ($places as $place) :?>*/
            echo "<li>$place</li>";                         //<li><?php echo $place; </li>      
             }?>                                                                                  
    </ul> 
</body>
</html>