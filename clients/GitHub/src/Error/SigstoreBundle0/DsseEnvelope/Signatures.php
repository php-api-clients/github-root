<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SigstoreBundle0\DsseEnvelope;

use Error;

final class Signatures extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SigstoreBundle0\DsseEnvelope\Signatures $error)
    {
    }
}
