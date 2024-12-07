<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SigstoreBundle0\VerificationMaterial;

use Error;

final class TlogEntries extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SigstoreBundle0\VerificationMaterial\TlogEntries $error)
    {
    }
}
