<?php

declare(strict_types=1);

class Rebase
{
    public function __construct(
        private readonly int $code
    ){
    }

    public function code(): int
    {
        return $this->code;
    }

}