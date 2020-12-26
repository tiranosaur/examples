<?php

abstract class Creator
{
    public abstract function factoryMethod(): Product;
}

class Creator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}

class Creator2 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct2();
    }
}

abstract class Product
{
    public abstract function operation(): string;
}

class ConcreteProduct1 extends Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}

class ConcreteProduct2 extends Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}

function foo(Creator $product)
{
    echo $product->factoryMethod()->operation();
}

$product1Creator = new Creator1();
$product2Creator = new Creator2();
foo($product1Creator);
foo($product2Creator);
