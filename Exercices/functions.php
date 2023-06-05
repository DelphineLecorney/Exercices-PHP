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
    ?>
</body>
</html>