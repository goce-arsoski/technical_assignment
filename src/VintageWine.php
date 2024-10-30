<?php

namespace TechTest;

class VintageWine implements Item
{
    public function __construct(private string $name, private int $value, private int $sellIn) {}

    public function name(): string { return $this->name; }
    public function value(): int { return min(50, $this->value); }

    public function ageByOneDay(): void
    {
        $this->value = min(50, $this->value + 2);
    }
}
