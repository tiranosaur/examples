<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

//string
if (empty($redis->get('str'))){
    $redis->set('str', 'hello world');
}
var_dump($redis->get('str'));
$redis->append('str', " - suck");
var_dump($redis->get('str'));
//$redis->del('str');

//list
$redis->rPush('list', 'List value');
$redis->rPush('list', 777);
var_dump($redis->lRange('list', 0, $redis->lLen('list')));

//counter
if (empty($redis->get('counter')) || $redis->get('counter')>5){
    $redis->del('str');
    $redis->del('list');
    $redis->set('counter', 0);
}
$redis->incr('counter');
$redis->incr('counter');
$redis->decr('counter');
var_dump($redis->get('counter'));