<!-- Exercice 1 : Écrire une fonction qui prend en paramètre un nombre et renvoie "positif" 
si le nombre est supérieur à zéro, "négatif" s'il est inférieur à zéro, et "zéro" s'il est égal à zéro. -->

<?php
function positif($num){
    if($num > 0){
        return 'Positif';
    }else if($num < 0){
        return 'Négatif';
    }else{
        return 'Zéro';
    }
}

$positif_1 = positif(5);
echo $positif_1;

?>
<br>
<!-- Exercice 2 : Écrire une fonction qui prend en paramètre un tableau de nombres
et renvoie la somme de tous les éléments du tableau. -->
<?php
function total($tab){
    $sum = array_sum($tab);
    return $sum;
}    
$tab = [5, 10, 15, 20, 25];
echo total($tab);
?>
<br>
<!-- Exercice 3 : Écrire une fonction qui prend en paramètre une chaîne de caractères 
et renvoie la même chaîne mais en inversant l'ordre des caractères. -->

<?php
function inverseString($string){
    return strrev($string);
}
$string = "Hello Word";
echo inverseString($string);
?>

<!-- Exercice 4 : Écrire une fonction qui prend en paramètre un nombre et renvoie 
le nombre de chiffres présents dans ce nombre. -->

<!-- Exercice 5 : Écrire une fonction qui prend en paramètre un tableau de chaînes 
de caractères et renvoie un nouveau tableau contenant uniquement les chaînes 
de caractères dont la longueur est supérieure à 5. -->