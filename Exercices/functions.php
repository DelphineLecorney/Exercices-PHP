<!DOCTYphraseE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        
    $phrase = 
    "According to a researcher (sic) at Cambridge University, it doesn't matter 
    in what order the letters in a word are, the only important thing is that the first 
    and last letter be at the right place. The rest can be a total mess and you can still 
    read it without problem. This is because the human mind does not read every letter by 
    itself but the word as a whole.";
    // Make sure that the separator parameter is placed before the string parameter.
    $phrase = explode(" ", $phrase);
    foreach($phrase as $tab){
        echo str_shuffle($tab." ");
    }   
    echo "<br>";

    // Use a function that capitalizes the first letter of the provided argument. 
    // Example: "émile"should return "Émile"
    $name = "émile";
    echo mb_convert_case($name, MB_CASE_TITLE, "UTF-8");

    echo "<br>";
    
    // Use the native function allowing you to display the current year.    
    echo date("Y");

    echo "<br>";

    // Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
    echo date('l d m Y h:i:s');

    echo "<br>";

    // Crée a "Sum" function that takes 2 numbers and returns their sum.

    function sum($a, $b){
        return $a + $b;
    }

    $res = sum(5, 5);
    echo "$res";


    ?>
</body>
</html>