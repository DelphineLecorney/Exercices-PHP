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

    ?>

</body>
</html>