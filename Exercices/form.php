<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Form</title>
</head>
<body>
    <header>
        <h1>Interview</h1>
    </header>
    <div class="container">
        <form method="GET" action="form.php">

            <p class ="name"> Please enter your fullname : <input name="fullname" type="text">
            <p class="age"> Please entre your age : <input name="age" type="number" value="age">
            <p class="radio"> Do you prefer Andy Warhol or Basquiat ? 
                <input name="prefer" type="radio" value="Andy-Warhol">Andy Warhol
                <input name="prefer" type="radio" value="Basquiat">Basquiat
            <p class="about"> About you : </p>
            <textarea name="biography"></textarea><br>
            <input name="submit" type="submit" value="Submit">
        </form>

    <?php
    if(isset($_GET['submit'])) {
        $fullname = $_GET['fullname'];
        $age = $_GET['age'];
        $prefer = isset($_GET['prefer']) ? $_GET['prefer'] : '';
        $biography = $_GET['biography'];

        $filterFullname = filter_var($fullname, FILTER_SANITIZE_STRING);
        $filterAge = filter_var($age, FILTER_VALIDATE_INT);
        $filterPrefer = filter_var($prefer, FILTER_SANITIZE_SPECIAL_CHARS);

        $errors = [];

        if(empty($filterFullname)) {
            $errors[] = 'Fullname is required';
        }
        if(empty($filterAge)) {
            $errors[] = 'Age is required';
        }
        if(empty($filterPrefer)) {
            $errors[] = 'Choose your preferences !';
        }

        if(!empty($errors)) {
            $warning = "Warning: ";
            echo $warning;
            foreach($errors as $error) {
                echo $error . ". ";
            }
            exit;
        }
    }
    echo "<h2>Result :</h2>";
        echo "<ul>";
        echo "<li><strong>Fullname :</strong> $filterFullname</li>";
        echo "<li><strong>Age :</strong> $filterAge</li>";
        echo "<li><strong>Preferences :</strong> $filterPrefer</li>";
        echo "<li><strong>About you :</strong> $biography</li>";
        echo "</ul>";

    ?>
    </div>
</body>
</html>