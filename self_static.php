<?php

class z1{
    protected static $str = '1';

    public static function getStrStatic(): string
    {
        return static::$str;
    }

    public static function getStrSelf(): string
    {
        return self::$str;
    }
}
class z2 extends z1{
    protected static $str = '2';
}

echo z2::getStrSelf() . '<br>' . z2::getStrStatic();