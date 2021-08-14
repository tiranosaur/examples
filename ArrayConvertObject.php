<?php

class Article
{
    public $id;
    public $name;

    public function __construct($params)
    {
        foreach ($params as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

class Articles
{
    public static function arrayToArticles($arr)
    {
        $articles = [];
        foreach ($arr as $key => $value) {
            if (!$value instanceof Article) {
                $value = new Article($value);
            }
            $articles[] = $value;
        }
        return $articles;
    }
}

$arr = [
    new Article(['id' => 1, 'name' => 'aa']),
    ['id' => 2, 'name' => 'bb'],
];

$articles = Articles::arrayToArticles($arr);
var_dump($articles);