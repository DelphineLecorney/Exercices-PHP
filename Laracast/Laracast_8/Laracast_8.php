Create an array of your favorites movies, including their respective release dates. 
Then, write a function that filters your list of movies down to only those that 
were released in the year 2000 or higher. Display the results in an unordered list.

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $movies = [
            [
                'name' => 'Back to the Future',
                'releaseYear' => 1985,
            ],

            [
                'name' => "Weekend at Bernie's",
                'releaseYear' => 1989,
            ],

            [
                'name' => 'Pirates of the Caribbean',
                'releaseYear' => 2003,
            ],

            [
                'name' => 'Interstellar',
                'releaseYear' => 2014,
            ],
        ];

        // Extra Credit:
        // Research and apply the array_filter() function on your own.
        function filterByRecent($movies)
        {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ($movie['releaseYear'] >= 2000) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByRecent($movies) as $movie) : ?>
            <li>
                <?= $movie['name'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>