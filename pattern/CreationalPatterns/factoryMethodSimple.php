<?php
//1 case
trait Factory{
    public static function getInstance(){
        $currentClass = static::class;
        return new $currentClass();
    }
}

//2 case
abstract class Product
{
    use Factory;
    public static function factoryMethod()
    {
        $currentClass = static::class;
        return new $currentClass();
    }
}

class Product1 extends Product
{
    public function operation(): string
    {
        return "{Result of the Product1}";
    }
}

class Product2 extends Product
{
    public function operation(): string
    {
        return "{Result of the Product2}";
    }
}

$product1 = Product1::factoryMethod();
echo $product1->operation();

$product2 = Product2::getInstance();
echo $product2->operation();
