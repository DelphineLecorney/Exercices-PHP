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
            <p class="age"> Please enter your age : <input name="age" type="number" value="age">
            <p class="radio"> Do you prefer Andy Warhol or Basquiat ? 
                <input name="prefer" type="radio" value="Andy-Warhol">Andy Warhol
                <input name="prefer" type="radio" value="Basquiat">Basquiat
            <p class="radio"> Are you classic music ou Jazz ? 
                <input name="prefer" type="radio" value="Classic-music">Classic music
                <input name="prefer" type="radio" value="Jazz">Jazz
            <p class="about"> About you : </p>
            <textarea name="biography"></textarea><br>
            <input name="submit" type="submit" value="Submit" class="submit">
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

            <h2>Informations</h2>
                <ul>
                <li><strong>Fullname : </strong> <?php echo '<span class="result-user">' .$filterFullname; ?></li>
                <li><strong>Age : </strong> <?php echo '<span class="result-user">' .$filterAge; ?></li>
                <li><strong>Preferences : </strong><?php echo  '<span class="result-user">' .$filterPrefer; ?></li>
                <li><strong>About you : </strong> <?php echo '<br><br><span class="result-user">' .$biography; ?></li>
                </ul>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>