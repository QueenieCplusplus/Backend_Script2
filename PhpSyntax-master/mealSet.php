
<?php

$tofu = 85;
$soyBean = 45;
$yogurt = 65;
$beanCurd = 60;

$taxRate = 0.10;

$mealSet = $tofu + $soyBean + $yoguart + $beanCurd;
$tip = $mealSet * $taxRate;

$total = $mealSet + $tip;

print 'The total cost of the meal is $' .$total;

?>