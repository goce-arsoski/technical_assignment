<?php

namespace TechTest;

class PerishableItem implements Item
{
    public function __construct(private string $name, private int $value, private int $sellIn) {}

    public function name(): string { return $this->name; }
    public function value(): int { return max(0, $this->value); }

    public function ageByOneDay(): void
    {
        $this->sellIn--;
        $this->value -= $this->sellIn < 0 ? 4 : 2;
        $this->value = max(0, $this->value);
    }

    // For testing purposes only
    public function sellIn(): int
    {
        return $this->sellIn;
    }
}
