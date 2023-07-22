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
<br>
<!-- Exercice 4 : Écrire une fonction qui prend en paramètre un nombre et renvoie 
le nombre de chiffres présents dans ce nombre. -->
<?php
function countNumber($num){
    $res = strlen($num);
    return $res;
}
$num = '1234';
echo countNumber($num);
?>
<br>
<!-- Exercice 5 : Écrire une fonction qui prend en paramètre un tableau de chaînes 
de caractères et renvoie un nouveau tableau contenant uniquement les chaînes 
de caractères dont la longueur est supérieure à 5. -->

<?php
function lenString($tab)
{
    $res = array();

    foreach($tab as $strings) {
        if(strlen($strings) > 5) {
            $res[] = $strings;
        }
    }
    return $res;
}
$tab = ['une', 'petite', 'et', 'une', 'grande', 'chaîne', 'de', 'caractères'];
$res = lenString($tab);
print_r($res);

?>
<br>
<!-- Exercice 6 : Écrire une fonction nommée calcul_moyenne($tab) qui prend en paramètre 
un tableau de nombres $tab et renvoie la moyenne de ces nombres. -->
<?php
function calcul_moyenne($tab){
    $sum = 0;
    for($i = 0; $i < count($tab); $i++){
        $sum = $sum + $tab[$i];
    }
    $avg = $sum / count($tab);
    return $avg;
}
$tab = [5, 10, 15, 20, 25];
echo calcul_moyenne($tab);
?>
<br>
<!-- Exercice 7 : Écrire une fonction nommée remplacer_voyelles($chaine) qui prend en 
paramètre une chaîne de caractères $chaine et renvoie une nouvelle chaîne où toutes 
les voyelles (a, e, i, o, u, y) sont remplacées par le caractère '-'. -->

<?php
function remplacer_voyelles($chaine){
    $newChaine = str_replace(array('a', 'e', 'i', 'o', 'u', 'y'), '-', $chaine);
    return $newChaine;
}
$chaine = "Lorem Ipsum is simply dummy text of the 
printing and typesetting industry. Lorem Ipsum has been the industry's 
standard dummy text ever since the 1500s, when an unknown printer took a 
galley of type and scrambled it to make a type specimen book.";
$resChaine = remplacer_voyelles($chaine);
echo $resChaine;
?>

<!-- Exercice 8 : Écrire une fonction nommée est_palindrome($chaine) qui prend en paramètre 
une chaîne de caractères $chaine et renvoie true si la chaîne est un palindrome, 
Sinon, la fonction doit renvoyer false. -->

<!-- Exercice 9 : Écrire une fonction nommée compter_mots($chaine) qui prend en paramètre 
une chaîne de caractères $chaine et renvoie le nombre de mots présents dans cette chaîne. 
Les mots sont séparés par des espaces. -->

<!-- Exercice 10 : Écrire une fonction nommée generer_mot_de_passe($longueur) qui génère et 
renvoie un mot de passe aléatoire de la longueur spécifiée $longueur. Le mot de passe 
doit être composé de lettres majuscules, de lettres minuscules et de chiffres. -->
