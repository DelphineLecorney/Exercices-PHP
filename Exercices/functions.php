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
    echo '<br><br>';

    // Use a function that capitalizes the first letter of the provided argument. 
    // Example: "émile"should return "Émile"
    $name = "émile";
    echo mb_convert_case($name, MB_CASE_TITLE, "UTF-8");

    echo '<br><br>';
    
    // Use the native function allowing you to display the current year.    
    echo date("Y");

    echo '<br><br>';

    // Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
    echo date('l d m Y h:i:s');

    echo '<br><br>';

    // Crée a "Sum" function that takes 2 numbers and returns their sum.

    function sum($a, $b){
        return $a + $b;
    }

    $res = sum(5, 5);
    echo "$res";

    echo '<br><br>';

    // Improve that function so that it checks whether the argument is indeed a Number. 
    // If not, it should display : "Error: argument is the not a number."

    function sum2($a, $b){
        if(is_numeric($a) && is_numeric($b)){
            return $a + $b;
        }echo "Error: argument is not a number.";
    }
    $res2 = sum2("j", 20);
    echo "$res2";

    echo '<br><br>';

    // Create a function that takes as argument a string of characters 
    // and returns an acronym made of the initials of each word.
    // Example: "In code we trust!" should return: ICWT).

    function initialsWord($string){
        $initial = '';
        $words = explode(" ", $string);
    
        foreach($words as $firstLetter){
            $initial .= $firstLetter[0];
        }
        return strtoupper($initial);
    }
    
    $phrase = "In code we trust!";
    $resPhrase = initialsWord($phrase);
    echo $resPhrase;
    
    echo '<br><br>';
    
    // Create a function that replaces the letters "a" and "e" with "æ". 
    function replaceLetters($words){
            $words = str_replace("ae", "æ", $words);
            return $words;
        }
    $wordsExample = 'caecotrophie, chaenichthys,microsphaera, sphaerotheca';
    echo $wordsExample;
    echo '<br>';

    $resWords = replaceLetters($wordsExample);
    echo $resWords

    ?>
</body>
</html>