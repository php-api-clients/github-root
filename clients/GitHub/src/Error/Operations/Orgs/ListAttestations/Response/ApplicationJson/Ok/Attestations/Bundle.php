<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations;

use Error;

final class Bundle extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle $error)
    {
    }
}
