Exercice 1 :
<?php
$variable = 0;

while ($variable < 10) {
    echo $variable . "<br>";
    $variable++;
}
?>

Exercice 2 :

<?php
$variable1 = 0;
$variable2 = 42;

while ($variable1 <= 20) {
    $resultat = $variable1 * $variable2;
    echo $resultat . "<br>";
    $variable1++;
}
?>

Exercice 3 :

<?php
$variable1 = 100;
$variable2 = 75;

while ($variable1 > 10) {
    $resultat = $variable1 * $variable2;
    echo $resultat . "<br>";
    $variable1--;
}
?>

Exercice 4 :

<?php
$variable = 1;

while ($variable < 10) {
    echo $variable . "<br>";
    $variable += 0.5;
}
?>

Exercice 5 :

<?php
for ($i = 1; $i <= 15; $i++) {
    echo "On y arrive presque<br>";
}
?>

Exercice 6 :

<?php
for ($i = 20; $i >= 0; $i--) {
    echo "C'est presque bon<br>";
}
?>

Exercice 7 :

<?php
for ($i = 1; $i <= 100; $i += 15) {
    echo "On tient le bon bout<br>";
}
?>

Exercice 8 :

<?php
for ($i = 200; $i >= 0; $i -= 12) {
    echo "Enfin !!!<br>";
}
?>