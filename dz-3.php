<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
/*1.1. посчитать длину массива*/
echo 'длина массива: ' . count($arr) . '<br>';


/*1.2. переместить первые 4 элемента массива в конец массива*/
foreach($arr as $key => $value) {
   if($key < 4) {
        unset($arr[$key]);
        $arr[$key] = $value;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';


/*1.3. получить сумму 4,5,6 элемента*/
$result = array_slice($arr, 4, 3);
echo "Сумма = " . array_sum($result);


$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];
/*2.1. найти все элементы которые отсутствуют в первом массиве и присутствуют во втором*/
echo '<pre>';
var_dump(array_diff($secondArr, $firstArr));
echo '</pre>';
/*2.2. найти все элементы которые присутствую в первом и отсутствуют во втором*/
echo '<pre>';
var_dump(array_diff($firstArr, $secondArr));
echo '</pre>';
/*2.3. найти все элементы значения которых совпадают */
echo '<pre>';
var_dump(array_intersect($firstArr, $secondArr));
echo '</pre>';
/*2.4. найти все элементы значения которых отличается*/
$c=array_merge(array_diff($firstArr,$secondArr),array_diff($secondArr,$firstArr));
foreach($c as $v) echo "<br> " . $v;



$firstArr =  [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];
/*3.1. получить все вторые элементы вложенных массивов*/
foreach ($firstArr as $items) {

    if(is_array($items)) {
        foreach ($items as $k => $val) {
            echo "<li>$k : $val</li>";
        }
    }
}

/*3.2 получить общее количество элементов в массиве*/

echo count($firstArr, COUNT_RECURSIVE);

/*3.3. получить сумму всех значений в массиве*/
$sum = 0;
array_walk_recursive($firstArr, function($number) use (&$sum) {
    $sum += $number;
});
echo '<pre>' . $sum . '</pre>';