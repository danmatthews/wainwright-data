<?php

require 'vendor/autoload.php';

$json = json_decode(file_get_contents('data.json'));

// dump($json);
$list = [];
foreach ($json as $item) {
    $newItem = [
        'name' => $item->{'Hill Name'},
        'height' => $item->{'Height'},
        'latitude' => $item->{'Latitude'},
        'longitude' => $item->{'Longitude'},
        'gr6_ref' => $item->{'GR(6)'},
        'eastings' => $item->{'GridEast'},
        'northings' => $item->{'GridNorth'},
        'grid_name' => $item->{'GridZN'},
    ];

    $list[] = $newItem;
}
$f = fopen('list.json', 'w+');
fwrite($f, json_encode($list));
fclose($f);
