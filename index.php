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
    $hello = 'hello'; // string
    $world = 'world'; // string
    $number = 548787; // int
    $number2 = -487.48; // float
    $bool = true; // boolean
    echo $hello . ' ' . $world . '. ' . $number . ' ' . $number2 . '<br>';
    echo $bool . ' Это булевое значение =) <br>';

    $a = 5;
    $b = "75";

    echo $a + intval($b);

    define(PI, 3.1415); // создал свою первую константу
?>
</body>
</html>