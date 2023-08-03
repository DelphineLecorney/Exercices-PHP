Create an array of any three usernames - perhaps for a "Top Performing Users" 
section of your website. 
Then, create a loop that displays each username within a list item.

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>
    <?php
        $usernames = [
            "JohnDoe",
            "JaneDoe",
            "FrankDoe"
        ];
    ?>

    <h1>Top Performing Users</h1>

    <ol>
        <?php foreach ($usernames as $username) : ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ol>

</body>
</html>