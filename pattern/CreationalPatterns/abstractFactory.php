<?php

trait Name{
    public function getName(){
        echo static::Class.'<br>';
    }
}
interface Factory{
    public function getProductT1():ProductT1;
    public function getProductT2():ProductT2;
}

class FactoryA implements Factory
{
    use Name;
    public function getProductT1():ProductT1
    {
        return new ProductT1a();
    }

    public function getProductT2():ProductT2
    {
        return new ProductT2a();
    }
}

class FactoryB implements Factory
{
    use Name;
    public function getProductT1():ProductT1
    {
        return new ProductT1b();
    }

    public function getProductT2():ProductT2
    {
        return new ProductT2b();
    }
}

interface ProductT1{}
interface ProductT2{}
class ProductT1a implements ProductT1 {use Name;}
class ProductT2a implements ProductT2 {use Name;}
class ProductT1b implements ProductT1 {use Name;}
class ProductT2b implements ProductT2 {use Name;}

$factoryA = new FactoryA();
$factoryB = new FactoryB();

$factoryB->getName();

$productT1a = $factoryA->getProductT1();
$productT2b = $factoryB->getProductT2();

$productT1a->getName();
$productT2b->getName();
