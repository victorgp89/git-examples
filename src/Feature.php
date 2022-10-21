<?php

declare(strict_types=1);

class Feature
{
    const BRANCH_NAME = 'feature_rebase';

    public function getBranchName(): string
    {
        return self::BRANCH_NAME;
    }

    private function show()
    {
        
    }
}