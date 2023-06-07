<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form method="GET" action="form.php">

        <p> Please enter your fullname : <input name="fullname" type="text" value="fullname">
        <p> Please entre your age : <input name="age" type="number" value="age">
        <p> Do you prefer Andy Warhol or Basquiat ? 
            <input name="prefer" type="radio" value="Andy-Warhol">Andy Warhol
            <input name="prefer" type="radio" value="Basquiat">Basquiat

    </form>
    
<?php
    

?>
</body>
</html>