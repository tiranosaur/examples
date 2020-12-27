<?php

trait Singleton
{
    private static $_instance;

    private function __construct(){}
    private function __wakeup(){}
    private function __clone(){}

    public static function getInstance()
    {
        return static::$_instance = static::$_instance ?? new static();
    }
}
class zero{
    use Singleton;
}
class first{
    use Singleton;
}

$zero1 = zero::getInstance();
$zero2 = zero::getInstance();
echo spl_object_hash($zero1);
echo '<br>';
echo spl_object_hash($zero2);

echo '<hr>';

$first1 = first::getInstance();
$first2 = first::getInstance();
echo spl_object_hash($first1);
echo '<br>';
echo spl_object_hash($first2);
