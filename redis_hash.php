<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$dateRange = date('i', strtotime('now')); // minute

$range = range(0, 59);
for ($index = 0; $index < 5; $index++) {
    unset($range [(int)date('i', strtotime('-' . $index . ' minute'))]);
}
array_map(function ($index) use ($redis) {
    $redis->del($index);
}, $range);

$random = random_int(1, 100);
$minute = (int)date('i', strtotime('now'));
if ($redis->hLen($minute) == 0) {
    $redis->hSet($minute, 0, $random);
} else {
    $redis->hSet($minute, $redis->hLen($minute), $random);
}
$keys = $redis->keys('*');
//sum each minute
array_map(function ($item) use ($redis) {
    echo $item . ' sum:  ' . array_sum($redis->hGetAll($item)) . '<br>';
}, $keys);
var_dump($keys);
//full summ
$summ = array_reduce($keys, function ($result, $item) use ($redis) {
    return $result + array_sum($redis->hGetAll($item));
});
echo 'whole summ  -  ' . $summ;