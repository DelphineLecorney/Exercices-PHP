<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $family = array('Noel', 'Jocelyne', 'Jean-Noel', 'others');
    print_r($family);
    echo "<br><br>";
    $recipes = array('Vol au vent','Courgettes Farcies','Tartiflette', 'Hâchis parmentier');
    print_r($recipes);
    echo "<br><br>";
    $films = array('Running Man', 'ça', 'Shining', 'Carrie', 'Dead Zone','Simetierre');
    print_r($films);
    echo "<br><br>";
    echo "My favourite film : $films[0] <br><br>";
    ?>
</body>
</html>