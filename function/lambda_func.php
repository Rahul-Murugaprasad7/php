<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'year' => 1968,
                'url' => 'www.abc.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'year' => 2021,
                'url' => 'www.abc.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'year' => 2011,
                'url' => 'www.abc.com'
            ]
        ];

        $filterBooks = array_filter($books, function ($book) {
            return $book['year'] < 2000;
        });
    ?>

    <ul>
        <?php foreach ($filterBooks as $book) : ?>
            <li>
                <a href="<?= $book['url'] ?>">
                    <?= $book['name']; ?> (<?= $book['year'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>