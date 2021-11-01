<?php
$futurama = [
    1 => 13,
    2 => 19,
    3 => 22,
    4 => 18,
//    5 => 13,
    6 => 26,
    7 => 26,
];
$result   = [];
foreach ($futurama as $season => $count) {
    for ($e = 1; $e <= $count; $e++) {
        $episode = $season . str_pad($e, 2, '0', STR_PAD_LEFT);
        array_push($result, $episode);
    }
}
shuffle($result);
foreach ($result as $id){
    echo "<a href='https://futurama.fox-fan.tv/page.php?id={$id}' style='font-size: 20px'>{$id}</a><br>";
}