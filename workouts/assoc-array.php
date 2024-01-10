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


        $tourist_places = [
            [
           'place' => "Bali",
            'country' => "Indo",
            'map' => "http://map.com"
            ],
        [
            'place' => "Leh",
            'country' => 'India',
            'map' => "http://map.com"
        ]
    ]
    ?>

    <ul>
            <?php foreach ($tourist_places as $places) : ?>
               
                <li>
                <a href="<?= $places['map']?>">    
                    <?= $places['place'] ; ?> ==><?= $places['country']?>
                </a>
            </li>
            <?php endforeach ;?>
    </ul>
</body>
</html>