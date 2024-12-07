<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\DependencyGraphSpdxSbom;

use Error;

final class Sbom extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom $error)
    {
    }
}
