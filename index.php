

<!-- **********The index for see the laracast.php*********** -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
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

        function filterByAuthor($books, $author){
            $filteredBooks = [];

            foreach($books as $book){
                if($book['author'] === 'Andy Weir'){
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }

        // Or function

        function filter($items, $key, $value){

            $filteredItems = [];

            foreach($items as $item){
                if($item[$key] === $value){
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }

        $filteredBooks = filter($books, 'author', 'Andy Weir');

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) :?> 

            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>(<?= $book['releaseYear' ]?>) - By <?= $book['author'] ?>
                </a>
            </li>

        <?php endforeach ?>
    </ul>
</body>
</html>