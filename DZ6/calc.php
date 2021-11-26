<?php
//var_dump($_POST);
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$operation = $_POST['operation'];
//var_dump($value1);
//var_dump($value2);
//var_dump($operation);
switch($operation) {
    case 'Сложение':
        echo $value1 + $value2;
    break;
    case 'Вычитание':
        echo $value1 - $value2;
    break;
    case 'Умножение':
        echo $value1 * $value2;
    break;
    case 'Деление':
        if($value2 <> 0) {
            echo $value1 / $value2;
        } else echo 'Делить на 0 нельзя!';
    break;
}

