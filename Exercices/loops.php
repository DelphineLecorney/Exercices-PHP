<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    // Using foreach, build a loop that displays each element of the array
    // Then, modify your loop so as to conjugate the verb "to code" in the present tense. 
    // Use a <br> to go to the next line.

    foreach($pronouns as $pronoun) {
        $verbCode = ($pronoun === 'He/She') ? 'codes' : 'code';
        echo "$pronoun $verbCode <br>";
    }
    echo "<br><br>";

    // Write a script that prints the numbers from 1 to 120 using  while 

    $numbers = 1;
    while($numbers <= 120)
    {
        echo $numbers;
        $numbers ++;
    }

    echo "<br><br>";

    // Write a script that prints the numbers from 1 to 120 using  for 

    for($numbers = 1; $numbers <= 120; $numbers ++){
        echo $numbers;
    }

    echo "<br><br>";

    // Create an array containing the firstname of everyone in your startup. 
    // Display each firstname using a loop.

    $firstnameWilson2 = [
        'Abel', 
        'Alexandra', 
        'Anthony', 
        'Benjamin', 
        'Bruno', 
        'Delphine', 
        'Emilien', 
        'Ethan', 
        'Ismaël', 
        'Jodie', 
        'Julien', 
        'Louka', 
        'Loïc', 
        'Luciano', 
        'Marine', 
        'Nikko', 
        'Noa',
        'Steve', 
        'Sylvain', 
        'Thomas', 
        'Willy'
    ];

    foreach($firstnameWilson2 as $firstnameWilson) {
        echo "$firstnameWilson <br>";
    }

    echo "<br><br>";

    // Create an array containing at least 10 countries. 
    // Then, generate the html that will render a select box inside an html form (see mockup below).
    
    $countries = [
        'Argentina',
        'Australia',
        'Austria',
        'Belgium',
        'Brazil',
        'Canada',
        'China',
        'Denmark',
        'Egypt',
        'France'
    ];

    ?> 
    <!-- https://www.codesnipper.com/snippets/php/php-foreach-loop-on-select-element?reference=2360646893 -->
<form>
    <label for= "countries">Choose a country : </label>
    <select name="country" id="country">
        <?php foreach($countries as $country) : ?>
            <option value = "<?php echo $country; ?>"><?php echo $country; ?></option>
        <?php endforeach; ?>
    </select>
</form>

   
        
    
    

</body>
</html>