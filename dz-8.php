<?php
/* 1.Рекурсивно выведите на экран ряд Фибоначчи до 10-го элемента*/
/*Вариант №1*/
function fib($n) {
    if ($n == 0 ) return 0;
    if ($n == 1 || $n == 2) {
        return 1;}
    else {
        return fib($n-1) + fib($n-2);
    }
}
for ($n = 0; $n < 10; $n++) {
    echo(fib($n) . ", ");
}
/*Вариант №2*/
function fibonacci($n,$f = 0,$s = 1) {
    $fib = [$f,$s];
    for($i=1;$i<($n-1);$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
echo "<pre>";
print_r(fibonacci(10));


/* 2.Создайте в цикле (for либо while) одномерный массив из 10 элементов, где значение на каждой итерации - произвольное число от 1 до 10 (используйте функцию mt_rand)*/

function arr($length, $arr = []) {
    for($i=0;$i<$length;$i++)
    {
        $arr[] = mt_rand(1, 10);
    }
    print_r($arr);
    /* 3.Выведите все чётные и все нечётные элементы массива из задания 2*/
    echo "чётные";
    foreach ($arr as $value) {
        if ($value % 2 === 0) {
            echo "<pre>";
            print_r($value);
            echo "</pre>";
        }
    }
    echo "нечётные";
    foreach ($arr as $value) {
        if ($value % 2 !== 0) {
            echo "<pre>" ;
            print_r($value);
            echo "</pre>";
        }
    }

    /* 4.Отсортируйте массив из задания 2 по ключу в обратном порядке*/
    krsort($arr);
    print_r($arr);

    /* 5.Отсортируйте массив из задания 2 по значению в обратном порядке*/
    arsort($arr);
    print_r($arr);

}
echo "<pre>";
print_r(arr(10));


/* 6.Создайте индексированный массив произвольных имён (до 10 элементов). Поменяйте местами ключи и значения этого массива и выведите на экран*/
$fruits = array('lemon', 'orange', 'banana', 'apple', 'apricot', 'kiwi', 'lime', 'mango', 'peach', 'plum');
var_dump($fruits);
$flipped = array_flip($fruits);
print_r($flipped);

/* 7.Создайте двумерный массив и переберите его циклами foreach, for и while*/
$someArr =  [
    'flowers' => [
        ['name' => 'rose', 'price' => 10, 'delivery' => 'NP'],
        ['name' => 'lily', 'price' => 20, 'delivery' => 'UP'],
        ['name' => 'tulip ', 'price' => 55, 'delivery' => 'GL'],
    ],
    'fruits' => [
        ['name' => 'banana', 'price' => 25, 'delivery' => 'NP'],
        ['name' => 'apple', 'price' => 35, 'delivery' => 'UP'],
        ['name' => 'mango ', 'price' => 95, 'delivery' => 'GL'],
        ['name' => 'kiwi ', 'price' => 65, 'delivery' => 'GL'],
    ],
];
foreach ($someArr as $product => $items) {
    foreach ($items as $k => $val) {
        echo "<pre>";
        echo "{$product} : {$val['name']}, {$val['price']}, {$val['delivery']} ";
    }
}
echo "<pre>";

$end = false;
$keys = ['flowers', 'fruits'];
while (!$end) {
    for ($i = 0; $i < count($keys); $i++) {
        $key = $keys[$i];
        for ($j = 0; $j < count($someArr[$key]); $j++) {
            echo "{$someArr[$key][$j]['name']}, {$someArr[$key][$j]['price']}, {$someArr[$key][$j]['delivery']}" . '<br>';
        }
    }
    $end = true;
}
for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    for ($j = 0; $j < count($someArr[$key]); $j++) {
        echo "{$someArr[$key][$j]['name']}, {$someArr[$key][$j]['price']}, {$someArr[$key][$j]['delivery']}" . '<br>';
    }
}