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
        foreach($pronouns as $pronoun) {
            $verbCode = ($pronoun === 'He/She') ? 'codes' : 'code';
            echo "$pronoun $verbCode <br>";
        }


    ?>

</body>
</html>