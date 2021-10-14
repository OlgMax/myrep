<?php
/*1) Создать родительский (главный класс)*/
class Main {
    protected $a = 10;
    protected $b = 20;

    public function getA() {
        return $this->a;
    }
    public function setA(int $val) {
        $this->a = $val;
    }
    public function getB() {
        return $this->b;
    }
    public function setB(int $val) {
        $this->b = $val;
    }
}
$obj = new Main();
$obj->setA(100);
$obj->setB(200);
echo '<br>' . $obj->getA();
echo '<br>' . $obj->getB();

/*2) Создать 3 наследника родительского класса*/
class One extends Main {
    public $c = 20;
    public function getC()
    {
        return $this->c;
    }
    public function setC(int $val)
    {
        $this->c = $val;
    }
    public function SumA($c) {
        return $this->a + $this->c = $c;
    }
}
$objOne = new One();
echo '<br>' . $objOne->SumA(15);


final class Two extends Main {
    public $d = 30;
    public function getD()
    {
        return $this->d;
    }
    public function setD(int $val)
    {
        $this->d = $val;
    }
    public function SumB($d) {
        return $this->b - $this->d = $d;
    }
}
$objTwo = new Two();
echo '<br>' . $objTwo->SumB(11);

abstract class Three extends Main {
    public $e = 40;
    public function getE()
    {
        return $this->e;
    }
    public function setE(int $val)
    {
        $this->e = $val;
    }
    public function SomeNum($e) {
        return $this->b / $this->e = $e;
    }
    abstract public function SomePower();
}

/*3) Создать по 2 наследника от наследников первого уровня*/

class FirstOne extends One {
    public $x;
    public function getX()
    {
        return $this->x;
    }
    public function setX(int $val)
    {
        $this->x = $val;
    }
    public function SomeNumX($x) {
        return $this->c / $this->x = $x;
    }
    public function SomeNumMainX($x) {
        return $this->a * $this->x = $x;
    }
}
$objFirstOne = new FirstOne();
echo '<br>' . $objFirstOne->SomeNumX(5);
echo '<br>' . $objFirstOne->SomeNumMainX(2);


class SecondOne extends One {
    public $y;
    public function getY()
    {
        return $this->y;
    }
    public function setY(int $val)
    {
        $this->y = $val;
    }
    public function SomeNumY($y) {
        return $this->c / $this->y = $y;
    }
    public function SomeNumMainY($y) {
        return $this->a * $this->y = $y;
    }
}
$objSecondOne = new SecondOne();
echo '<br>' . $objSecondOne->SomeNumY(55);
echo '<br>' . $objSecondOne->SomeNumMainY(22);

class FirstThree extends Three {
    public $z = 3;
    public function SomePower() {
        return $this->z ** 3;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setX(int $val)
    {
        $this->z = $val;
    }
    public function SomeNumZ($z) {
        return $this->e / $this->z = $z;
    }
    public function SomeNumMainZ($z) {
        return $this->b * $this->z = $z;
    }
}
$objFirstThree = new FirstThree();
echo '<br>' . $objFirstThree->SomePower();
echo '<br>' . $objFirstThree->SomeNumZ(100);
echo '<br>' . $objFirstThree->SomeNumMainZ(300);

class SecondThree extends Three {
    public $q = 4;
    public function SomePower() {
        return $this->q ** 2;
    }
    public function getQ()
    {
        return $this->q;
    }
    public function setQ(int $val)
    {
        $this->q = $val;
    }
    public function SomeNumQ(int $q) {
        return $this->e - $this->q = $q;
    }
    public function SomeNumMainQ($q) {
        return $this->b + $this->q = $q;
    }
}
$objSecondThree = new SecondThree();
echo '<br>' . $objSecondThree->SomePower();
echo '<br>' . $objSecondThree->SomeNumQ(400);
echo '<br>' . $objSecondThree->SomeNumMainQ(500);