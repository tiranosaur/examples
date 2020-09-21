<?php
$startTimer = microtime(1);

function generateRandomString()
{
    $str = implode('', range(0, 9)) . implode('', range('a', 'z')) . implode('', range('A', 'Z'));
    return str_shuffle($str);
}

$memcache = new Memcached();
$memcache->addServer('127.0.0.1', 11211);
$memcache->setOption(Memcached::OPT_COMPRESSION, false);
if (!$memcache->get('counter')) {
    $memcache->add('counter', 0);
    $memcache->add('tests', 'INSERT INTO test (`str`)VALUES');
}
foreach (range(0, 5000) as $item) {
    $memcache->append('tests', '('.generateRandomString().'),');
    $memcache->increment('counter');
}

if ($memcache->get('counter') > 5000) {
    $query = trim($memcache->get('tests'), ',');
    //clear $memcache
    $memcache->flush();

    $mysqli = new mysqli('192.168.10.10', 'homestead', 'secret', 'homestead');
    $query = trim($query, ',');
    $mysqli->query($query);
}
//1.125580072403
var_dump(microtime(1) - $startTimer);