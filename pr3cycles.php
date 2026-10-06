<?php

echo "<h1>Задание 1</h1>";

$startNumber = 1;
$multiplier = 2;
$quantity = 5;

$current = $startNumber;
for ($i = 0; $i < $quantity; $i++) {
    echo $current . "<br>";
    $current = $current * $multiplier;
}

echo "<h1>Задание 2</h1>";

$lastNumber = 10;
$sum = 0;

for ($i = 1; $i <= $lastNumber; $i++) {
    $sum = $sum + $i;
}

echo "Сумма чисел от 1 до $lastNumber = $sum<br>";

echo "<h1>Задание 3</h1>";

$lastNumber = 10;
$product = 1;

for ($i = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $product = $product * $i;
    }
}

echo "Произведение чётных чисел от 1 до $lastNumber = $product<br>";

echo "<h1>Задание 4</h1>";

$n = 5;
$distance = 10;
$total = 0;

for ($i = 1; $i <= $n; $i++) {
    $total = $total + $distance;
    $distance = $distance + $distance * 0.1;
}

echo "Суммарный путь за $n дней = " . round($total, 2) . " км<br>";

echo "<h1>Задание 5</h1>";

$totalLegs = 64;

for ($rabbits = 0; $rabbits <= $totalLegs / 4; $rabbits++) {
    $remaining = $totalLegs - $rabbits * 4;
    if ($remaining % 2 == 0) {
        $geese = $remaining / 2;
        echo "Кроликов: $rabbits, гусей: $geese<br>";
    }
}