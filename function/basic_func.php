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
             ],
             [
                'name' => 'ghi',
                'author' => 'jkl',
                'url' => 'www.abc.com'
             ]
        ];

        function filterByName($books){          //function filterByName($books,$author)
            $filterBooks = [];

            foreach ($books as $book){
                if ($book['author'] === 'def'){
                    $filterBooks[] = $book;
                }
            }

            return $filterBooks;
        }
    ?>

    <ul>
        <?php foreach (filterByName($books) as $book) : ?>    <!--function filterByName($books,'def') -->
                <li>
                    <a href="<?= $book['url'] ?>">
                        <?= $book['name']; ?>  -By <?= $book['author'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>