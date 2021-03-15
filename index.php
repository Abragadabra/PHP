<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <style>
        body {
            font-size: 35px;
            font-family: sans-serif;
            background-color: gray;
        }
    </style>
</head>
<body>
<?php
//    $hello = 'hello'; // string
//    $world = 'world'; // string
//    $number = 548787; // int
//    $number2 = -487.48; // float
//    $bool = true; // boolean
//    echo $hello . ' ' . $world . '. ' . $number . ' ' . $number2 . '<br>';
//    echo $bool . ' Это булевое значение =) <br>';
//
//    $a = 5;
//    $b = "75";
//
//    echo $a + intval($b);
//
//    define(NUMBER_PI, 3.14159265); // создал свою первую константу

    $a = 15;
    $b = -30;

//    echo $a + $b . '<br>';
//    echo $a - $b . '<br>';
//    echo $a * $b . '<br>';
//    echo $a / $b . '<br>';
//    echo $a % $b . '<br>';

    echo M_PI . '<br>';
    echo M_E . '<br>';

    echo abs($b) . '<br>';
    echo ceil(3.001) . '<br>'; // округляет к большему
    echo floor(9.99999). '<br>'; // округляет к меньшему
    echo round(3.456, 1) . '<br>'; // правильное округление
    echo mt_rand(-999, 999) . '<br>';
?>
</body>
</html>