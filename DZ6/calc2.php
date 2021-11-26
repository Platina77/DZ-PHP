<?php
//var_dump($_POST);
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
if($_POST['sum']){
    echo $value1 + $value2;
} elseif ($_POST['sub']){
    echo $value1 - $value2;
} elseif ($_POST['mult']){
    echo $value1 * $value2;
} elseif (($_POST['div']) <> 0) {
    echo $value1 / $value2;
} else echo 'Делить на 0 нельзя!';
