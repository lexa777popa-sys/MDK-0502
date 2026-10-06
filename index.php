
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> изучаем php </h1>
    <h2> вывод на экран </h2>

    <p> Команда echo </p>
<?php
echo 'Это php'
?>
<p> Сокращенный echo</p>
<?='Еще раз php' ?>
<p>Вывод чисел</p>
<?= 33.3 ?>
<h2> Переменная</h2>
<p> объявление переменной</p>
<?php
$num = 55;
$n = $num + 33;
echo "n = $n, num = $num";
?>
<h2>Арифметические операции</h2>
<p><?= '+ - * / ** %' ?></p>
<h2> Использование скобок </h2>
<p>Приоритет операции</p>
<?= 5 + 5 * 5 - 5 ?>
<p> </p>
<?= (5 + 5) * 5;?>
<h2>Пример:</h2>
<p>(a + b)/c при a = 10, b = 20, c = 15 </p>
<?php
    $a= 10;
    $b= 20;
    $c= 15;
    $res = ($a + $b) / $c; 
    echo "Результат: $res";

?>
</body>
</html>