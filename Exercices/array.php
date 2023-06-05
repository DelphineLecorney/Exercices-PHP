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

    echo "<br><br>";

    // Add an element in a multi-dimensional array

    // What I did => array_push($me['hobbies'], 'Taxidermy'); (same result but wich is better)
    $me['hobbies'][] = 'Taxidermy'; 
    echo '<pre>';
    print_r($me['hobbies']);
    echo '<pre>';

    // Replace an element

    echo "Replace an element";
    $me['lastname'] = 'Durand';

    echo '<pre>';
    print_r($me);
    echo '<pre>';

    // Create a new array from 2 others (or more)

    $soulmate = array(
        'firstname' => 'Kevin',
        'lastname' => 'Costner',
        'age' => 60,
        'my favourite season' => 'Winter',
        'I like soccer' => TRUE ? 'Yes' : 'No',
        'hobbies' => array('Computer', 'Netflix', 'Action', 'Walk')
    );

    // Either intersection (only the hobbies common to both arrays)

    $resHobbiesInter = array_intersect($me['hobbies'], $soulmate['hobbies']);
    echo '<pre>';
    print_r($resHobbiesInter);
    echo '<pre>';

    // A fusion (all the hobbies of each array together)

    $resHobbiesFusion = array_merge($me['hobbies'], $soulmate['hobbies']);
    echo '<pre>';
    print_r($resHobbiesFusion);
    echo '<pre>';
    ?>
  
    <!-- ------------------------------------------------------------------------------ -->
    
    <!-- Other exercices  -->

    <?php

    $web_development = array(
        'frontend' => [],
        'backend' => []
    );
    // Add lines in the right tab
    array_push($web_development['frontend'], 'xhtml');
    array_push($web_development['backend'], 'Ruby on Rails');
    array_push($web_development['frontend'], 'css');
    array_push($web_development['frontend'], 'Flash');
    array_push($web_development['frontend'], 'Javascript');
    
    // Add a line that replace 'xhtml' by 'html'.
    $replaceXHTML = array_search('xhtml', $web_development['frontend']);
    if ($replaceXHTML !== false) {
        $web_development['frontend'][$replaceXHTML] = 'html';
    };
    // Add a line that removes 'Flash' from the array.
    $removeFlash = array_search('Flash', $web_development['frontend']);
    if ($removeFlash !== false) {
        array_splice($web_development['frontend'], $removeFlash, 1);
    }
    // Display with 'print_r()'
    echo "Display the push of a line in a tab with 'print_r()' : <br>";
    echo '<pre>';
    print_r($web_development); 
    echo '<pre>';
    // Display with 'var_dump()'
    echo "Display the push of a line in a tab with 'var_dump()' : <br>";
    echo "<br>";
    var_dump($web_development);
    ?>
<!-- https://www.php.net/manual/fr/language.types.array.php -->

</body>
</html>