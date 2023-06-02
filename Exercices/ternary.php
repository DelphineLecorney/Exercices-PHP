<!DOCTYPE html>
<html lang="en">
<body>
<!-- 11. Ternary exercises
In a new file ternary.php declare a $hello variable which value is 
a greeting message. That greeting message depends on another 
variable $gender, which can either be "M" or "F". 
Finish by displaying the resulting message. -->
<br><br>
<form method="GET" action="ternary.php">
    <label for="gender">Please select your gender: </label>
    <input type="radio" name="gender" value="M" id="M" checked="checked" />
    <label for="M">M</label>
    <input type="radio" name="gender" value="W" id="W" />
    <label for="W">W</label>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$submit = $_GET['submit'];
$gender = $_GET['gender'];
$hello = ($gender == 'M') ? "Welcome Mister!" : "Welcome Miss!";

echo $hello;
?>


</body>
</html>