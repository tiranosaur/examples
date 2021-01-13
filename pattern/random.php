<?php
$arr = [
    'Singleton - одиночка',
    'Factory - фабрика',
    'Absctact Factory - абстрактная фабрика',
    'Builder - строитель'
];
echo $arr[random_int(0, count($arr))];