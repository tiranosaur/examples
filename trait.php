<?php

trait MyTrait
{
    private $str = 'my string';

    public function say()
    {
        echo $this->str;
    }

    abstract function moo();
}

class Zero
{
    use MyTrait;

    function moo()
    {
        echo 'moo';
    }
}

$zero = new Zero();
$zero->say();
$zero->moo();
