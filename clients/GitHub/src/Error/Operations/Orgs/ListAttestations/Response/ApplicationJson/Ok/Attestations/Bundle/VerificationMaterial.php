<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle;

use Error;

final class VerificationMaterial extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok\Attestations\Bundle\VerificationMaterial $error)
    {
    }
}
