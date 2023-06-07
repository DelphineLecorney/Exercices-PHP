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

        <p> Please enter your fullname : <input name="fullname" type="text">
        <p> Please entre your age : <input name="age" type="number" value="age">
        <p> Do you prefer Andy Warhol or Basquiat ? 
            <input name="prefer" type="radio" value="Andy-Warhol">Andy Warhol
            <input name="prefer" type="radio" value="Basquiat">Basquiat
        <p> About you : </p>
        <textarea name="biography"></textarea><br>
        <input name="submit" type="submit" value="Submit">
    </form>

<?php
if(isset($GET['submit'])) {
    $fullname = $_GET['fullname'];
    $age = $_GET['age'];
    $prefer = $_GET['prefer'];
    $biography = $_GET['biography'];

    $filterFullname = filter_var($fullname, FILTER_SANITIZE_STRING);
    $filterAge = filter_var($age, FILTER_VALIDATE_INT);
    $filterPrefer = filter_var($prefer, FILTER_SANITIZE_SPECIAL_CHARS);
    $filterBiography = filter_var($biography, FILTER_SANITIZE_STRING);

}
    echo "<pre>";
    print_r($_GET);

?>
</body>
</html>