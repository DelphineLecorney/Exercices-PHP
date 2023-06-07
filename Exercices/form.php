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
                    $warning = "Warning : ";
                    echo $warning;
                    foreach($errors as $error) {
                        echo '<span class="error">'. $error . ". ";
                    }
                    exit;
                }
        ?>
        <div class="result">

            <h2>Result :</h2>
                <ul>
                <li><strong>Fullname :</strong> <?php echo $filterFullname; ?></li>
                <li><strong>Age :</strong> <?php echo $filterAge; ?></li>
                <li><strong>Preferences :</strong><?php echo  $filterPrefer; ?></li>
                <li><strong>About you :</strong> <?php echo $biography; ?></li>
                </ul>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>