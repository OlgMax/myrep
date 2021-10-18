<?php
/*$ch = fopen('index.html', 'w+');
var_dump($ch);

$a = 2;
$b = 'test';
$c = fopen('index.html', 'w+');
$d = [1, 2, 3, 4];

$arr = [
    'test' => $a,
    'obj' => $b,
    $c,
    $d];
echo '<pre>';
echo var_dump($arr);
echo '</pre>';

$i = 0;
foreach ($arr as $key => $value)
{
  if (1 == $key)  {
    echo var_dump($key);
    echo var_dump($value);
  }
}*/

/*$count = count($arr);
$i = 0;
while ($i < $count) {
echo $i;
$i++;
}
$keys = array_keys($arr);
var_dump($keys);
for ($i=0; $i < count($arr); $i++) {
    echo $i;
    $i++;
}*/

$arr = ['string', 23, [12,48]];
foreach ($arr as $key => $value) {
    echo '<pre>';
    var_dump($key, $value);
    echo '</pre>';

    if(is_array($value)) {
        foreach ($value as $name) {
            echo '<pre>';
            var_dump($name);
            echo '</pre>';
        }
    }
}

/*$keys = array_keys($arr);
var_dump($keys);*/
for ($i=0; $i < count($arr); $i++) {
    echo '<pre>';
    var_dump($arr[$i]);
    echo '</pre>';

    if (is_array($arr[$i])) {
        for ($e = 0; $e < count($arr); $e++) {
            echo '<pre>';
            var_dump($arr[$e][$i]);
            echo '</pre>';
        }
    }
}