
 <!-- Series of exercises on PHP conditional structures.
https://github.com/DelphineLecorney/CRL-Wilson-2/blob/main/1.TRAIL/3.The-Mountain/09.PHP/1.PHP-Fundamentals/4-php-drill.md -->

<!DOCTYPE html>
<html lang="en">
<body>
<?php
$temperature = 12;
if ($temperature >= 15) {
    $clothes = "T-shirt";
    $should_i_wear_a_scarf = false;
} else {
    $clothes = "Pull-over";
    $should_i_wear_a_scarf = true;
}

function cover_my_chest_with($clothes)
{
    echo "Cover my chest with: " . $clothes;
}
cover_my_chest_with($clothes);

function grab_scarf_from_door_hanger(){
    echo "Grab_scarf_from_door_hanger !";
}
?>

<br>

<!-- -------------------------------------------------- -->

<!-- To test your code, change the value of $room_is_filthy 
and check that the message displayed is relevant. -->

<?php
// 1.1 Clean your room Exercise 

$room_is_filthy = false;
if($room_is_filthy){
    cleanup_room();
    echo "<br>Room is now clean!";
}else{
    echo "<br>Nothing to do, room is neat.";
}
function cleanup_room(){
    echo "Yuk, Room is dirty : let's clean it up !";
}

?>

<br><br>

<!-- -------------------------------------------------- -->

<!-- Let's now make our script a little smarter by allowing more than 2 possible values. 
The room could be either "health hazard", "filthy", "dirty", "clean", "immaculate" 
in that order. Store them in an array $possible_states.
Use a if/ elseif / else for that. Invent the messages to display for each use case.
Need a headstart? Here is a starting base, that you'll need to fix. -->

<?php

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array (
    0 => 'health hazard',
    1 => 'filthy',
    2 => 'dirty',
    3 => 'clean',
    4 => 'immaculate');

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[3]; 

if($room_filthiness === $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness === $possible_states[1]){
	echo "Yuk, Room is filthy : let's clean it up !";
} else if($room_filthiness === $possible_states[2]){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if($room_filthiness === $possible_states[4]){
	echo "Yuk, Room is immaculate : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>
<br><br>
<!-- ---------------------------------------------------------------------------- -->

<!-- 2. Display a different greeting message depending on the time of the day.
You know what's worse than a stupid robot? A stupid impolite robot. Let's fix that.

Write a script that implements these specifications : -->
<?php
$now = new \DateTime();

if (($now->format("H:i:s") >= "05:00:00") and ($now->format("H:i:s") <= "09:00:00")) {
    echo "Good morning!";
}
else if (($now->format("H:i:s") >= "09:01:00") and ($now->format("H:i:s") <= "12:00:00")) {
    echo "Good day!";
}
else if (($now->format("H:i:s") >= "12:01:00") and ($now->format("H:i:s") <= "16:00:00")) {
    echo "Good afternoon!";
}
else if (($now->format("H:i:s") >= "16:01:00") and ($now->format("H:i:s") <= "21:00:00")) {
    echo "Good evening!";
}
else {
    echo "Good night!";
}
?>
<br>
<!-- ----------------------------------------------------------------------------------- -->
<br><br><br>
<!-- 3. Display a different greeting according to the user's age.
Let's continue to make our robot a little more civil 
and greet humans properly, taking into account their age. -->

<!-- Mis en commentaire pour ne pas gêner le form suivant -->

<!-- <form method="get" action="conditions.php">
	<label for="age">Please type your age: </label>
    <input type="text" name="age">
    <br><br>
    <label for="gender">Please select your gender: </label>
    <input type="radio" name="gender" value="M" id="M" checked="checked" /> 
    <label for="M">M</label>
    <input type="radio" name="gender" value="W" id="W" /> 
    <label for="W">W</label>
    <br><br>
	<label for="English">Do you speak English ?  </label>
	<input type="radio" name="English" value="Yes" id="Yes" checked="checked" /> 
    <label for="Yes">Yes</label>
    <input type="radio" name="English" value="No" id="No" /> 
    <label for="No">No</label>
    <br><br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<br>
<?php
if (isset($_GET['age'])) {
    $age = $_GET['age'];

    if (isset($_GET['gender']) && $_GET['gender'] === 'M' && isset($_GET['English']) && $_GET['English'] === 'Yes') {
        $hello = 'Hello Mister Teen! Hello Boy!';
    } elseif (isset($_GET['gender']) && $_GET['gender'] === 'M' && isset($_GET['English']) && $_GET['English'] === 'No') {
        $hello = 'Hello Mister Teen! Aloha boy!';
    } elseif (isset($_GET['gender']) && $_GET['gender'] === 'W' && isset($_GET['English']) && $_GET['English'] === 'No') {
        $hello = 'Hello Miss Teen! Aloha Girl!';
    } else {
        $hello = 'Hello Miss Teen! Hello Girl!';
    }
    
    if ($age < 12) {
        echo " Hello kiddo !";
        echo $hello;      
    } else if ($age >= 12 && $age <= 18) {
        echo " Hello teenager!"; 
        echo $hello;    
    } else if ($age > 18 && $age <= 115) {
        echo " Hello adult !";
        echo $hello;     
    } else {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
        echo $hello;     
    }
} else {
    echo "Please type your age !";
}
?> Fin du commentaire du premier form -->

<br><br><br><br>

<!-- ----------------------------------------------------------------------------------- -->
<!-- 6. The Girl Soccer team
You want to create a soccer team for girls between 21 and 40 years old. 

Real-life scenario : form field validation-->

<!-- Mis en commentaire pour ne pas gêner le form suivant -->

<!-- <form method="GET" action="conditions.php">    
    <label for="name">Please enter your name : </label>
    <input type="text" name="name">
    <br><br>
    <label for="age">Please type your age : </label>
    <input type="text" name="age">
    <br><br>
    <label for="gender">Please select your gender : </label>
    <input type="radio" name="gender" value="M" id="M" checked="checked" />
    <label for="M">M</label>
    <input type="radio" name="gender" value="W" id="W" />
    <label for="W">W</label>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <br><br> -->
<?php
// Condition avec le "else"

// if(isset($_GET['submit'])){
//     $name = $_GET['name'];
//     $age = $_GET['age'];
//     $gender = $_GET['gender'];
    
// }
// if(($age >= 21) && ($age <= 40) && ($gender === 'W')){
//     echo "Welcome to the team, ", $name, "!";
// }else{
//     echo "Sorry you don't fit the criteria, ", $name, "!";
// }

// 7. Achieve the same, without the ELSE.

// Condition sans le "else"

// if(isset($_GET['submit'])){
//     $name = $_GET['name'];
//     $age = $_GET['age'];
//     $gender = $_GET['gender'];   
//     $message = "Sorry, you don't fit the criteria !";

//     if(($age >= 21) && ($age <= 40) && ($gender === 'W')){
//         $message = "Welcome to the team, " . $name . "!";
//     }    
//     echo $message;
// }
?>
<br><br><br><br>
<!-- ----------------------------------------------------------------------------------- -->

<!-- 8. "School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated  -->

<form method="GET" action="conditions.php">
    <label for="note"> Please enter your note : </label>
    <input type="text" name="note">
    <br><br>
    <input type="submit" name="submit" value="Submit">

    <?php
if(isset($_GET['submit']) && isset($_GET['note'])){
    $note = $_GET['note'];

    if($note <= 4){
        echo "This work is really bad. What a dumb kid!";
    }
    if(($note >= 5) && ($note <= 9)){
        echo "This is not sufficient. More studying is required.";
    }
    if($note == 10){
        echo "barely enough!";
    }
    if(($note == 11) || ($note == 12) || ($note == 13) || ($note == 14)){
        echo "Not bad!";
    }
    if(($note == 15) || ($note == 16) || ($note == 17) || ($note == 18)){
        echo "Bravo, bravissimo!";
    }
    if($note == 19 || $note == 20){
        echo "Too good to be true: confront the cheater!";
    }
}
?>

</body>
</html>