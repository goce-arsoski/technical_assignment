<?php

namespace TechTest;

class WorldCupTickets implements Item
{
    public function __construct(private string $name, private int $value, private int $sellIn) {}

    public function name(): string { return $this->name; }
    public function value(): int { return max(0, min(50, $this->value)); }

    public function ageByOneDay(): void
    {
        $this->sellIn--;
        // Check how many days left to the sellIn date
        switch ($this->sellIn) {
            case $this->sellIn < 0:
                $this->value = 0;
                break;
            case $this->sellIn <= 5:
                $this->value = min(50, $this->value + 3);
                break;
            case $this->sellIn <= 10:
                $this->value = min(50, $this->value + 2);
                break;
            default:
                $this->value = min(50, $this->value + 1);
        }
    }

    // For testing purposes only
    public function sellIn(): int
    {
        return $this->sellIn;
    }
}
