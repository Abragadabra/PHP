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

//    $a = 15;
//    $b = -30;

//    echo $a + $b . '<br>';
//    echo $a - $b . '<br>';
//    echo $a * $b . '<br>';
//    echo $a / $b . '<br>';
//    echo $a % $b . '<br>';

//    echo M_PI . '<br>';
//    echo M_E . '<br>';

//    echo abs($b) . '<br>';
//    echo ceil(3.001) . '<br>'; // округляет к большему
//    echo floor(9.99999). '<br>'; // округляет к меньшему
//    echo round(3.456, 1) . '<br>'; // правильное округление
//    echo mt_rand(-999, 999) . '<br>';

//    $string = 'Some text';
//    echo "text: $string" . '<br>'; // но двойные ковычки в 2 раза дольше обрабатываются!
//    echo '<input type="password"> <br>';
//    $lenght = strlen($string);
//    echo $lenght . ' ';
//    echo md5('Hello World!!');

//    $a = 8;
//
//    if ($a > 5) {
//        echo 'Переменная "a" больше 5';
//    }
//
//    else {
//        echo 'Переменная "a" меньше 5';
//    }
//
//    if ($a != 6) {
//        echo ' Переменная "a" не равна 6';
//    }

//    $rain = false;
//    $snow = false;
//    $sun = false;
//    $temp = 'warm';
//
//    if ($sun == true || $temp == "warm") {
//        echo 'Сегодня тепло, но нет солнца. Можно прогуляться';
//    }
//    elseif ($rain == true && $sun == false) {
//        echo 'Сегодня идет дождь и нет солнца. Я бы не пошел гулять =)';
//
//    }


//    $day = 5;
//
//    switch ($day) {
//        case 1:
//            echo 'Сегодня понедельник';
//            break;
//
//        case 2:
//            echo 'Сегодня вторник';
//            break;
//
//        case 3:
//            echo 'Сегодня среда';
//            break;
//
//        case 4:
//            echo 'Сегодня четверг';
//            break;
//
//        case 5:
//            echo 'Сегодня пятница';
//            break;
//    }


//    $num = array(44, 3, 2, -34, 4);
//    $num[3] = 54;
//    echo $num[3];
//
//    $people = [
//       'age' => 25,
//       'name' => 'Alexander',
//       'skills' => 'php'
//    ];
//    echo $people['skills'];


//    $arr = [
//        [1, 5, -75],
//        ['John', false, '@'],
//        [6.654, 3.141569]
//    ];
//
//    echo $arr[1][0];



//    for ($i = 0; $i < 10; $i++) {
//        echo 'слово' . '<br>';
//    }

//    while ($i = 0) {
//        echo 'text';
//    }
//    $i = 1;
//    do {
//        echo 'asfas';
//    } while ($i != 1);

//    for ($i = 1; $i < 15; $i++) {
//        if ($i % 2 == 1) {
//            continue;
//        }
//        echo "$i" . '<br>';
//    }

//    $arr = [45, 'hello', 'lorem', 7, 5.6, -4, 'world', '!'];
//
//    for ($i = 0; $i < count($arr); $i++) {
//        echo "$arr[$i]" . '<br>';
//    }

//    function quadratic($a, $b, $c) {
//        $D = ($b * $b) - (4 * $a * $c); // высчитываем дискриминант
//
//        if ($D < 0) { // проверяем, на отрицательность
//            echo 'Уравнение не имеет кореней, так как дискриминант отрицательный!';
//        }
//
//        elseif ($D == 0) { // проверяем, равенство к нулю
//            $x1 = -$b / $a;
//        }
//
//        elseif ($D > 0) {
//            $x1 = (-$b + sqrt($D)) / (2 * $a);
//            $x2 = (-$b - sqrt($D)) / (2 * $a);
//            echo "Первый корень: $x1" . '<br>';
//            echo "Второй корень: $x2" . '<br>';
//            echo "Дискриминант: $D";
//        }
//        else {
//            echo 'Что-то пошло не так!';
//        }
//    }
//
//    quadratic(-31, -13, -10);



?>

</body>
</html>