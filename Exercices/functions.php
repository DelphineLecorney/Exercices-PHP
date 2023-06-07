<!DOCTYPE html>
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
    $wordsExample = 'caecotrophie, caenichthys, microsphaera, sphaerotheca';
    function replaceLetters($words){
            $words = str_replace("ae", "æ", $words);
            return $words;
        }
    $resWords = replaceLetters($wordsExample);
    echo $resWords;
    
    echo '<br><br>';
    
    // Create the opposite function, which replaces "æ" by "ae" in : 
    // cæcotrophie, chænichthys, microsphæra, sphærotheca
    $wordsExampleBis = 'cæcotrophie, chænichthys, microsphæra, sphærotheca';
    function replaceLettersBis($words){
        $wordsBis = str_replace("æ", "ae", $words);
        return $wordsBis;
    }
    $resWordsBis = replaceLettersBis($wordsExampleBis);
    echo $resWordsBis;

    echo '<br><br>';

    // Create a function to return "notice", "warning" and "error" messages 
    // to a user,which takes 2 arguments : the "message", and the "css class" 
    // (values: "info", "error", "warning"). This function would allow us to write this :
    function feedback($message, $cssClass) {
        $values = ["info", "error", "warning"];
        if(!in_array($cssClass, $values)){
            return "This isn't a right css class";
        }
        $messageHTML = '<div class="'.$cssClass .'">'.$cssClass.':'.$message.'.'.'<div>';
        
        return $messageHTML;
    }
    $resMessage = feedback('Incorrect email address', 'error');
    echo $resMessage;

    // Improve that function by giving the default class the value of "info". 
    // Look into the documentation documentation php.
    function feedbackBis($message, $cssClass='info') {
        $values = ["info", "error", "warning"];
        if(!in_array($cssClass, $values)){
            return "This isn't a right css class";
        }
        $messageHTML = '<div class="'.$cssClass .'">'.$cssClass.':'.$message.'.'.'<div>';
        
        return $messageHTML;
    }
    $resMessage = feedbackBis('Incorrect email address');
    echo $resMessage;

    // Create a random words generator, outputing 2 words: one which length 
    // is between 1 to 5 letters, the other between 7 and 15 letters.
    // The screen will display a title "Generate a new word", and then
    // the two generated words, and underneath, a bouton with the text "Generate").
    
    function wordsGenerator($minLength, $maxLength){
        $alphabet = 'abcdefghijklmnopqrstuvwxyz';
        $word = "";
        $nbLetters = rand($minLength, $maxLength);
        $word = substr(str_shuffle($alphabet), 0, $nbLetters);
        return $word;
    }   
    if (isset($_GET['generate'])) {

        $firstWord = wordsGenerator(1,5);
        $secondWord = wordsGenerator(7, 15);

        echo '<h1>Generate a new word</h1>';
        echo '<p>' . $firstWord . '</p>';
        echo '<p>' . $secondWord . '</p>';
    }
    echo '<form method="GET" action="">';
    echo '<button type="submit" name="generate" value="true">Generate</button>';
    echo '</form>';

    echo '<br><br>';
    // De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"

    $str = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
    $str = strtolower($str);
    echo $str;




    ?>


</body>
</html>