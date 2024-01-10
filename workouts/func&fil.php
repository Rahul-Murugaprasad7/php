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
            'yr_to_travel' => "2024",
            'map' => "http://map.com"
            ],
        [
            'place' => "Leh",
            'country' => 'India',
            'yr_to_travel' => "2025",
            'map' => "http://map.com"
        ]
        ];

    function filterByYear($tourist_places){
        $filteredPlace = [];

        foreach ($tourist_places as $places){
            if ($places['yr_to_travel'] === '2024'){
                $filteredPlace[] = $places;
            }
        }
        
        return $filteredPlace;
    }
    ?>

    <ul>
            <?php foreach (filterByYear($tourist_places) as $places) : ?>
                    <li>
                        <a href="<?= $places['map']?>">    
                            <?= $places['place'] ; ?> (<?= $places['country']?>)
                        </a>
                    </li>
            <?php endforeach ;?>
    </ul>

</body>
</html>