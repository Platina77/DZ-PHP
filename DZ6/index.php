<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="calc.php" method="POST">
            <select name="operation">
                <option>Сложение</option>
                <option>Вычитание</option>
                <option>Умножение</option>
                <option>Деление</option>
            </select>
            <input type="text" name="value1">
            <input type="text" name="value2">
            <input type="submit" value="Посчитать">
        </form>
    </div>

    <div>
        <form action="calc2.php" method="POST">
            <input type="text" name="value1" value="5">
            <input type="text" name="value2" value="7">
            <input type="submit" name="sum" value="+">
            <input type="submit" name="sub" value="-">
            <input type="submit" name="mult" value="*">
            <input type="submit" name="div" value="/">
        </form>
    </div>
</body>
</html>


