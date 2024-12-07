<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ApiOverview\Domains;

use Error;

final class ArtifactAttestations extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ApiOverview\Domains\ArtifactAttestations $error)
    {
    }
}
