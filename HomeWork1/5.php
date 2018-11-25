<?php
$bmv = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'RAV4',
    'speed' => 180,
    'doors' => 5,
    'year' => 2016
];

$opel = [
    'model' => 'Zafira',
    'speed' => 195,
    'doors' => 5,
    'year' => 2008
];

$cars = [
    'bmv' => $bmv,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($cars as $key => $value) {
    echo 'CAR ' . $key . PHP_EOL;
    echo $value['model'] . ' ' . $value['speed'] . ' ' . $value['doors'] . ' ' . $value['year'];
}