<?php
/*Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.*/
$someArr =  [
    'one' => 1,
    'two' => [
        'one' => 14,
        'seven' => 55,
        'three' => [
            'one' => 11,
            'seven' => 442,
            'three' => [
                'one' => 15,
                'seven' => 22,
                'three' => 32,
            ],
        ],
    ],
    'three' => [
        'one' => 16,
        'two' => [
            'one' => 75,
            'seven' => 72,
            'three' => 77,
        ],
    ],
];

function getArr (array $arr, $count) {
    $i = 0;
    $c = $count - 1;
    foreach ($arr as $value) {
        if (is_array($value)) {
            getArr($value, $count);
        }
        if (!is_array($value) && $i == $c) {
            var_dump($value);
        }
        $i++;

    }
}
echo getArr($someArr, 3);

/*Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false*/

$str1 = 'Big ben is a British landmark';

/*ВАРИАНТ 1*/
function getLetter (string $str, $b)
{
    if(is_string($b)) {
        return mb_substr_count($str, $b);
    }
    else {
        return var_dump(is_string($b));
    }
}
echo getLetter($str1, 'B');
echo '<br>';

/*ВАРИАНТ 2*/
function getLetB (string $str, $b)
{
    return is_string($b) ? mb_substr_count($str, $b) : 'false';
}
echo getLetB ($str1, $someArr);
echo '<br>';

/*Создать функцию которая считает сумму значений всех элементов массива произвольной глубины*/

/*ВАРИАНТ 1*/
function getSum (array $arr) {
    $sum = 0;
    array_walk_recursive($arr, function($i) use (&$sum) {
        $sum += $i;
    });
    return $sum;
}
echo getSum($someArr);
echo '<br>';

/*ВАРИАНТ 2*/
function sumArr(array $arr) {
    $sum = 0;
    foreach($arr as $val) {
        if (is_array($val)) {
            $sum += sumArr($val);
        } else {
            $sum += $val;
        }
    }
    return $sum;
}
echo sumArr($someArr);
echo '<br>';

/*Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float*/
function getSquare (float $x, float $y) {
    return ($x > $y) ? floor ($x/$y)**2 : floor ($y/$x)**2;
}
echo getSquare(16, 5.3);