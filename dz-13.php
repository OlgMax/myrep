<?php
/*1. Создайте класс House. Класс должен реализовывать интерфейс Building и иметь методы для установки номера дома, количества квартир и количества этажей*/
interface Building
{
    public function numBuild();
    public function countFlat();
    public function countFloor();
}

class House implements Building
{
    public $numBuild = 10;
    public $countFlat = 25;
    public $countFloor = 5;

    public function numBuild()
    {
        return $this->numBuild;
    }
    public function countFlat()
    {
        return $this->countFlat;
    }
    public function countFloor()
    {
        return $this->countFloor;
    }
}
$house = new House();
echo 'номер дома ' . $house->numBuild() . '<br>';
echo 'количество квартир ' . $house->countFlat() . '<br>';
echo 'количество этажей ' . $house->countFloor() . '<br>';

/*2. Создайте классы Cat, Dog, Cow. Классы должны наследоваться от абстрактного класса Animal. Абстрактный класс должен иметь следующие абстрактные методы: getName say feed*/

abstract class Animal
{
    public $name;
    public $say;
    public $feed;
    abstract public function getName();
    abstract public function say();
    abstract public function feed();

}

class Cat extends Animal
{
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function say()
    {
        return $this->say;
    }
    public function setSay($say)
    {
        $this->say = $say;
    }
    public function feed()
    {
        return $this->feed;
    }
    public function setFeed($feed)
    {
        $this->feed = $feed;
    }

}
$cat = new Cat();
$cat->setName('cat Tom');
$cat->setSay('Murr');
$cat->setFeed('Whiskas');
echo $cat->getName() . ' to say ' . $cat->say()  . ' and like ' . $cat->feed().'<br>';

class Dog extends Animal
{
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function say()
    {
        return $this->say;
    }
    public function setSay($say)
    {
        $this->say = $say;
    }
    public function feed()
    {
        return $this->feed;
    }
    public function setFeed($feed)
    {
        $this->feed = $feed;
    }
}
$dog = new Dog();
$dog->setName('dog Pitt');
$dog->setSay('Gaw');
$dog->setFeed('Optimeal');

echo $dog->getName() . ' to say ' . $dog->say()  . ' and like ' . $dog->feed().'<br>';

class Cow extends Animal
{
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function say()
    {
        return $this->say;
    }
    public function setSay($say)
    {
        $this->say = $say;
    }
    public function feed()
    {
        return $this->feed;
    }
    public function setFeed($feed)
    {
        $this->feed = $feed;
    }
}
$cow = new Cow();
$cow->setName('cow Lylu');
$cow->setSay('Muu');
$cow->setFeed('Zdorova');
echo $cow->getName() . ' to say ' . $cow->say()  . ' and like ' . $cow->feed().'<br>';

/*3. Создайте произвольный набор классов с применением Наследования, Инкапсуляции и Полиморфизма*/
/*Наследованиe*/
class Users
{
    public $name;
    public $age;
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age): void
    {
        $this->age = $age;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
}
class Contact extends Users
{
    public $email;
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getAge()
    {
        return parent::getAge(); // TODO: Change the autogenerated stub
    }
    public function getName()
    {
        return parent::getName(); // TODO: Change the autogenerated stub
    }
}
$user = new Users();
$user->setName(Name);
$user->setAge(22);
$contact = new Contact();
$contact->setEmail(mail);

/*Инкапсуляция*/
class App {
    private static $user;
    public function User( )
    {
        if( $this->user == null )
        {
            $this->user = new User();
        }
        return $this->user;
    }
}

class User {
    private $name;
    public function __construct()
    {
        $this->name = "Josephina";
    }
    public function GetName() {
        return $this->name;
    }
}
$app = new App();
echo $app->User()->GetName();

/*Полиморфизм*/

interface MyInterface
{
    public function doThis();
    public function doThat();
    public function setName($name);
}
class MyClass implements MyInterface
{
    protected $name;
    public function doThis()
    {
    }
    public function doThat()
    {
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
$myClass = new MyClass();
$myClass->setName(Name);

/*4. Создайте класс Calculator, который должен выполнять математические операции сложение, вычитание, умножение, деление, возведение в степень и извлечение корня. Операции должны быть реализованы отдельными методами*/
class Calculator
{
    public $a = 10;
    public $b = 20;

    public function getSum()
    {
        return $this->a + $this->b;
    }
    public function getSubtract()
    {
        return $this->a - $this->b;
    }
    public function getMultiply()
    {
        return $this->a * $this->b;
    }
    public function getDivide()
    {
        return $this->a / $this->b;
    }
    public function getPower()
    {
        return $this->b ** $this->a;
    }
    public function getExtract($a)
    {
        return sqrt($a);
    }
}

$calculator = new Calculator();
echo $calculator->getSum() . '<br>';
echo $calculator->getSubtract() . '<br>';
echo $calculator->getMultiply() . '<br>';
echo $calculator->getDivide() . '<br>';
echo $calculator->getPower() . '<br>';
echo $calculator->getExtract(25) . '<br>';