<?php

namespace TechTest;

class GoldBar implements Item
{
    public function __construct(private string $name) {}

    public function name(): string { return $this->name; }
    public function value(): int { return 80; }

    public function ageByOneDay(): void
    {
        // Special item whose value is always 80 and never changes
    }
}
