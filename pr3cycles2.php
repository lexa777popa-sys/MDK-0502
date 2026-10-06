<?php

echo "<h1>Задача 1</h1>";

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
}

echo "<h1>Задача 2</h1>";

$a = 4;
$b = 3;

for ($i = 0; $i < $b; $i++) {
    for ($j = 0; $j < $a; $j++) {
        echo "X";
    }
    echo "<br>";
}

echo "<h1>Задача 3</h1>";

echo "<table border='1' cellpadding='10'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h1>Задача 4</h1>";

echo "<table border='1' cellpadding='10'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 9; $j++) {
        $num = $i * 10 + $j;
        if ($num >= 10) {
            echo "<td>" . $num * $num . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "<h1>Задача 5</h1>";

$a = 6;
$b = 4;

for ($i = 0; $i < $b; $i++) {
    for ($j = 0; $j < $a; $j++) {
        if ($i == 0 || $i == $b - 1 || $j == 0 || $j == $a - 1) {
            echo "*";
        } else {
            echo "-";
        }
    }
    echo "<br>";
}

echo "<h1>Задача 6</h1>";

$n = 36;

for ($i = 1; $i <= $n; $i++) {
    if ($n % $i == 0) {
        echo $i . " ";
    }
}

echo "<br>";

echo "<h1>Задача 7</h1>";

$k = 1234;
$product = 1;

while ($k > 0) {
    $digit = $k % 10;
    $product = $product * $digit;
    $k = intdiv($k, 10);
}

echo "Произведение цифр = $product<br>";