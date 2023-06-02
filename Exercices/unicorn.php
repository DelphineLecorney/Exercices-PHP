<!DOCTYPE html>
<html lang="en">
<body>
<!-- 
  https://github.com/DelphineLecorney/CRL-Wilson-2/blob/main/1.TRAIL/3.The-Mountain/09.PHP/1.PHP-Fundamentals/4-php-drill.md  

  Create an html form asking "Are you a human, a cat or a unicorn ?".
 When submitted, the screen displays an animated Gif showing 
 either a human, a cat or a unicorn, as per the user input 
 (you can find gifs here). Use GET or POST as method, whichever 
 you like. Use a ternary operation to evaluate the condition. 
-->
 <!-- <form method="GET" action="unicorn.php">
    <label for="humain">humain</label>
    <input type="checkbox" name="humain" value="humain" /><br>

    <label for="chat">chat</label>
    <input type="checkbox" name="chat" value="chat" /><br>

    <label for="licorne">licorne</label>
    <input type="checkbox" name="licorne" value="licorne" /><br><br>

    <input type="submit" name="submit" value="Submit" />
</form>

<?php
    if (isset($_GET['submit'])) {
        $humain = isset($_GET["humain"]);
        $chat = isset($_GET["chat"]);
        $licorne = isset($_GET["licorne"]);

        $res = ($humain) ? 'https://media.giphy.com/media/CCLZ53CmdBN5u/giphy.gif' : (($chat) ? 'https://media.giphy.com/media/F0eb5L2xJJJNC/giphy.gif' : 'https://media.giphy.com/media/14SH0G6mK51ew/giphy.gif');
    ?>
    Pour mémoire ligne de code vue dans humans.php
    <img src="<?php echo $res; ?>" alt="Image" />
<?php } ?> -->


<!-- -------------------------------------------------------------------------------- -->
<br><br><br><br>
 <!-- Test form field validation -->

<form method="GET" action="unicorn.php">
    <label for="fullname"> Please enter your fullname: </label>
    <input type="text" name="fullname">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php
$fullname = $_GET['fullname'];
// strlen() Returns the length of the given string.
if ( strlen($fullname) == 0 ){
  echo "Ahem. You forgot to enter your name.";
  exit;
}

// empty() Détermine si une variable est vide, elle ne génère pas d'alerte
// si la variable n'existe pas.

// filter_var() 
// filter_var($valeur, $filtre, $options);
// Le paramètre $valeur représente la valeur à filtrer ou à valider.
// Le paramètre $filtre spécifie le filtre à appliquer
// Le paramètre $options est facultatif qui permet de spécifier des 
// options ou des indicateurs supplémentaires pour le filtre.
?>



</body>
</html>