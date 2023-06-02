<html>
  <head>
    <title>Variables_types_php</title>
  </head>
  <body>
    <?php
    $name = 'Delphine';
    $age = 52; 
    $colorEyes = 'nuts';
    $hungry = True;
    $family = array (
        0 => 'Noel',
        1 => 'Jocelyne',
        2 => 'Jean-Noel',
        3 => '...');
    ?>

        <p>Hi! My name is <?php echo $name; ?>!</p>
        <p>I'm <?php echo $age; ?> years old !</p>
        <p>My eyes are <?php echo $colorEyes; ?>!</p>
        <p>The first person in my family is <?php echo $family[0]; ?></p>
        <p>Are you hungry ? <?php echo $hungry ? 'Yes' : 'No'; ?></p>

  </body>
</html>

