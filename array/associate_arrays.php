<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <?php
        $books = [
             [
                'name' => 'absc',
                'author' => 'def',
                'url' => 'www.abc.com'
             ],
             [
                'name' => 'abc',
                'author' => 'def',
                'url' => 'www.abc.com'
             ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>