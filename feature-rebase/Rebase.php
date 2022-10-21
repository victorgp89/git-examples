<?php

declare(strict_types=1);

class Rebase
{
    public function __construct(
        private readonly int $code,
        private readonly int $number,
        private readonly string $name,
    ){
    }

    public function code(): int
    {
        return $this->code;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function number(): int
    {
        return $this->number;
    }

}