<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\DependencyGraphSpdxSbom\Sbom;

use Error;

final class Packages extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages $error)
    {
    }
}
