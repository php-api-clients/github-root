<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Users\ListAttestations\Response\ApplicationJson\Ok;

use Error;

final class Attestations extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok\Attestations $error)
    {
    }
}
