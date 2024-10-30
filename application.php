<?php

require __DIR__ . '/vendor/autoload.php';

use TechTest\{DefaultItem, VintageWine, WorldCupTickets, PerishableItem, GoldBar};

$items = [
    new DefaultItem('Hat', 10, 7),
    new DefaultItem('Frying Pan', 10, 4),
    new VintageWine('Vintage Wine', 32, 0),
    new WorldCupTickets('World Cup Tickets', 10, 8),
    new PerishableItem('Milk', 10, 7),
    new GoldBar('Gold Bar'),
];

for ($i = 0; $i < 10; $i++) {
    echo 'DAY ' . $i . "\n";
    foreach ($items as $item) {
        $item->ageByOneDay();
        echo $item->name() . ': ' . $item->value() . "\n";
    }
    echo "\n";
}
