<?php
    // 3. Объяснить, как работает данный код:
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    //переменная $b в момен сравнения преобразуется в число, а т.к. == сравнивает только значения, то 5 = 5 буюет true 
    
    var_dump((int)'012345');     // Почему 12345?
    //int преобразует строку в целое число, поэтому 12345

    var_dump((float)123.0 === (int)123.0); // Почему false?
    //float преобразует в дробное число, а int - в целое. === является срванением и по значению и по типу

    var_dump((int)0 === (int)'hello, world'); // Почему true?
    // При приведении строки к типу int получаем 0
?>

<?php
    //*Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.
    $a = 2;
    $b = 1;

    $a =--$a; 
    $b +=$b;

    echo 'Переменная a равна ' . "$a <br/>";
    echo 'Переменная b равна ' . "$b";
?>

<?php
$h1 = 'Домашнее задание №4';
$title = 'Домашнее задание к 1 уроку';
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
</head>
<body>
    <h1><?php echo $h1;?></h1>
    <p><?php echo $year;?></p>
</body>
</html>