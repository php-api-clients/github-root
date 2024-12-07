<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CodeScanningVariantAnalysis;

use Error;

final class SkippedRepositories extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\SkippedRepositories $error)
    {
    }
}
