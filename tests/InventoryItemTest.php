<?php

use PHPUnit\Framework\TestCase;
use TechTest\{DefaultItem, VintageWine, WorldCupTickets, PerishableItem, GoldBar};

class InventoryItemTest extends TestCase
{
    public function testDefaultItemAgesCorrectly()
    {
        $item = new DefaultItem('Hat', 10, 7);
        $item->ageByOneDay();

        $this->assertEquals(6, $item->sellIn());  // sellIn decreases by 1
        $this->assertEquals(9, $item->value());   // value decreases by 1
    }

    public function testVintageWineIncreasesValue()
    {
        $item = new VintageWine('Vintage Wine', 32, 5);
        $item->ageByOneDay();

        $this->assertEquals(34, $item->value());  // value increases by 2
    }

    public function testWorldCupTicketsIncreaseValue()
    {
        $item = new WorldCupTickets('World Cup Tickets', 10, 8);
        $item->ageByOneDay();

        $this->assertEquals(7, $item->sellIn());  // sellIn decreases by 1
        $this->assertEquals(12, $item->value());  // value increases by 2
    }

    public function testPerishableItemDegradesTwiceAsFast()
    {
        $item = new PerishableItem('Milk', 10, 7);
        $item->ageByOneDay();

        $this->assertEquals(6, $item->sellIn());  // sellIn decreases by 1
        $this->assertEquals(8, $item->value());   // value decreases by 2
    }

    public function testGoldBarDoesNotChange()
    {
        $item = new GoldBar('Gold Bar');
        $item->ageByOneDay();

        $this->assertEquals(80, $item->value());  // value stays constant at 80
    }
}
