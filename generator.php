<?php

class CC
{
    private $items = [];

    public function add(string $string)
    {
        array_push($this->items, $string);
    }

    public function get(){
        foreach ($this->items as $item){
            yield $item;
        }
    }
}

$cc = new CC();
$cc->add('one');
$cc->add('two');
$cc->add('three');

foreach ($cc->get() as $item){
    echo $item;
}

