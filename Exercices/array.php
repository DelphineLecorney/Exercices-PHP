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

    // Another way to display an array
    // display in a performatted text
    echo '<pre>';
    print_r($films);
    echo '</pre>';

    // var_dump displays information includinf data type and contents
    echo "Display with var_dump : <br>";
    var_dump($films);
    echo "<br><br>";

    // An associative array
    $me = array(
        'firstname' => 'Delphine',
        'lastname' => 'Lecorney',
        'age' => 52,
        'my favourite season' => 'Spring',
        'I like soccer' => TRUE ? 'Yes' : 'No'
    );
    echo '<pre>';
    print_r($me);
    echo '</pre>';  

    echo "<br><br>";
    
    // Multidimensional arrays
    $me['hobbies'] = array('Computer', 'Netflix', 'Garden', 'Games mmorpg');
    
    $son = array(
        'firstname' => 'Noël',
        'lastname' => 'Lecorney',
        'age' => 27,
        'my favourite season' => 'Summer',
        'I like soccer' => FALSE ? 'Yes' : 'No'
    );
    
    $son['hobbies'] = array('Games', 'Airsoft', 'Remote-controlled cars', 'drones');
    
    $me['son'] = $son;
    
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    
    // Count the number of elements
    $countHobbiesSon = count($son['hobbies']);
    print_r("Number of son's hobbies: $countHobbiesSon");
    echo "<br>";
    $countHobbiesMe = count($me['hobbies']);
    print_r("Number of my hobbies : $countHobbiesMe");
    echo "<br>";
    $totalHobbies = $countHobbiesMe + $countHobbiesSon;
    print_r("Total number of our hobbies :  $totalHobbies");
    
    ?>
</body>
</html>