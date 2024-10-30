<?php

namespace TechTest;

interface Item
{
    public function name(): string;
    public function value(): int;
    public function ageByOneDay(): void;
}
