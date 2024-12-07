<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\CodeScanningVariantAnalysis;

final class ScannedRepositories extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis\ScannedRepositories $error)
    {
    }
}
