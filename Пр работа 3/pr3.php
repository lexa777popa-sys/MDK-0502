<h1>Задание 1 </h1>
<?php
$a = 3;
$b = 7;

if ($a < $b) {
    echo ($a + $b) . PHP_EOL;
} else {
    echo ($a * $b) . PHP_EOL;
}
?>

<br>
<h1>Задание 2</h1>
<?php
$angle1 = 60;
$angle2 = 45;

$angle3 = 180 - $angle1 - $angle2;

if ($angle1 <= 0 || $angle2 <= 0 || $angle3 <= 0) {
    echo "Треугольник не существует." . PHP_EOL;
} else {
    echo "Треугольник существует." . PHP_EOL;
    if ($angle1 == 90 || $angle2 == 90 || $angle3 == 90) {
        echo "Это прямоугольный треугольник." . PHP_EOL;
    } else {
        echo "Треугольник не является прямоугольным." . PHP_EOL;
    }
}
?>

<br>
<h1> Задание 3</h1>
<?php
$age = 5; 

if ($age <= 1) {
    $ageGroup = 'Котята';
} elseif ($age > 1 && $age <= 3) {
    $ageGroup = 'Молодые коты';
} elseif ($age > 3 && $age <= 7) {
    $ageGroup = 'Коты средних лет';
} else { // $age > 7
    $ageGroup = 'Почтенные коты';
}

echo "Возраст: $age лет, группа: $ageGroup" . PHP_EOL;
?>
<br>
<h1> Задание 4</h1>
<?php
$a = 3.0;
$b = 4.0;
$c = 5.0;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Такой треугольник существует." . PHP_EOL;
} else {
    echo "Такой треугольник не существует." . PHP_EOL;
}
?>
<br>
<h1>Задание 5</h1>
<?php
$n = 2000;

$isLeap = false;

if ($n % 100 !== 0 && $n % 4 === 0) {
    $isLeap = true;
} elseif ($n % 100 === 0 && $n % 400 === 0) {
    $isLeap = true;
}

if ($isLeap) {
    echo "$n — високосный год." . PHP_EOL;
} else {
    echo "$n — не високосный год." . PHP_EOL;
}
?>
<br>
<h1> Задание 6</h1>
<?php
$A = 20000;
$B = 15000;

$sum = $A + $B;

if ($sum > 32767) {
    echo "Переполнение: сумма больше 32767." . PHP_EOL;
} else {
    echo "Сумма: $sum" . PHP_EOL;
}
?>
<br>
<h1> Задание 7 </h1>
<?php
$A = 10.0;
$B = 8.0;

$x = 9.0;
$y = 7.0;
$z = 5.0;

function fits($a, $b, $p, $q) {
    return ($p <= $a && $q <= $b) || ($p <= $b && $q <= $a);
}

$canPass = false;

if (fits($A, $B, $x, $y)) $canPass = true;
if (fits($A, $B, $x, $z)) $canPass = true;
if (fits($A, $B, $y, $z)) $canPass = true;

if ($canPass) {
    echo "Кирпич пройдёт через отверстие." . PHP_EOL;
} else {
    echo "Кирпич не пройдёт через отверстие." . PHP_EOL;
}
?>
<br>
<h1> Задание 8</h1>
<?php
$day = 60;

if ($day < 1 || $day > 365) {
    echo "Некорректный номер дня." . PHP_EOL;
    exit;
}

$daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
$monthNames = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
               'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

$remaining = $day;
$month = 0;

while ($remaining > $daysInMonth[$month]) {
    $remaining -= $daysInMonth[$month];
    $month++;
}

echo "$remaining {$monthNames[$month]}" . PHP_EOL;
?>
<br>
<h1> Задание 9</h1>
<?php
$num = 24;

$divBy4 = ($num % 4 === 0);
$divBy6 = ($num % 6 === 0);

echo ($divBy4 ? 'да' : 'нет') . PHP_EOL;
echo ($divBy6 ? 'да' : 'нет') . PHP_EOL;

if ($divBy4 && $divBy6) {
    echo "Делится и на 4, и на 6." . PHP_EOL;
}
?>
<br>
<h1> Задание 10</h1>
<?php
$x = 3.0;
$y = 4.0;
$r = 5.0;

$distanceSquared = $x * $x + $y * $y;
$radiusSquared = $r * $r;

if ($distanceSquared <= $radiusSquared) {
    echo "Точка лежит внутри круга или на его границе." . PHP_EOL;
} else {
    echo "Точка лежит вне круга." . PHP_EOL;
}
?>


