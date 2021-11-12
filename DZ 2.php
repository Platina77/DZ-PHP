<?php
    /* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующиему приципу:
    если $a и $b положительные, вывести их разность;
    если $a и $b отрицательные вывести из произведение;
    если $a и $b разных знаков, вывести их сумму.
    Ноль можно считать положительным числом.*/

    $a = -2;
    $b = 9;

    if($a >= 0 && $b >= 0){
        echo $a - $b;
    } else if ($a < 0 && $b < 0){
        echo $a * $b;
    } else if(($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)){
        echo $a + $b . '<br>';
    }
    
?>

<?php
    /* 2. Присвоить переменной $a значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a  до 15
    */
    $a = 7;

    switch($a){
        case 0: echo $a++ . '<br>';
        case 1: echo $a++ . '<br>';
        case 2: echo $a++ . '<br>';
        case 3: echo $a++ . '<br>';
        case 4: echo $a++ . '<br>';
        case 5: echo $a++ . '<br>';
        case 6: echo $a++ . '<br>';
        case 7: echo $a++ . '<br>';
        case 8: echo $a++ . '<br>';
        case 9: echo $a++ . '<br>';
        case 10: echo $a++ . '<br>';
        case 11: echo $a++ . '<br>';
        case 12: echo $a++ . '<br>';
        case 13: echo $a++ . '<br>';
        case 14: echo $a++ . '<br>';
        case 15: echo $a++ . '<br>';
    }
?>

<?php
    // 3. Реализоватья основные 4 арифметические операции в виде функций с двумя параментрами. Обязательно испльзовать return
   
    function add($a, $b){
        return ($a + $b);
    }
    $add = add (2, 3);
    echo $add . '<br>';

    function sub($a, $b){
        return ($a - $b);
    }
    $sub = sub (10, 3);
    echo $sub . '<br>';

    function mult($a, $b){
        return ($a * $b);
    }
    $mult = mult (7, 3);
    echo $mult . '<br>';
    
    function div($a, $b){
        return ($a / $b);
    }
    $div = div (9, 3);
    echo $div . '<br>';

    /* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
    В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

    function mathOperation($arg1, $arg2, $operation){

        switch($operation){

            case 'add':
                $res = add($arg1, $arg2);
                break;
            case 'sub':
                $res = sub($arg1, $arg2);
                break;
            case 'mult':
                $res = mult($arg1, $arg2);
                break;        
            case 'div':
                $res = div($arg1, $arg2);
                break;
        }
        return $res;

    }

    $result = mathOperation(5, 10, 'div');
    echo $result . '<br>';

?>

<?php
    //5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

    echo date('Y') . '<br>';
?>

<?php
    // 6. С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

    function power($val, $pow){
        if ($val == 0){
            return 0;
        } else if ($pow==0 || $val ==1){
            return 1;
        } else if ($pow==1 ){
            return $val;
        } else {
            return $val * power($val, $pow-1);
        }

    }
    $result = power (1, 3);
    echo $result . '<br>';
?>
