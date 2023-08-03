<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter";
    $read = true;

    if($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    ?>
    <h1>
        <?= $message ?>
    </h1>
    <h2>Recommended Books</h2>

    <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'

            ],
            [
                'name' => "The Langoliers",
                'author' => "Andy Weir",
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => "The Martian",
                'author' => "Andy Weir",
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        function filterByAuthor($books){
            //
        }
    ?>

    <ul>
        <?php foreach ($books as $book) :?> 
            <?php if ($book['author'] === 'Andy Weir') : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>(<?= $book['releaseYear' ]?>) - By <?= $book['author'] ?>
                </a>
            </li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>

    <p>
        <?= filterByAuthor($books) ?>
</body>
</html>