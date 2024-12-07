<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CvssSeverities;

use Error;

final class CvssVFour extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CvssSeverities\CvssVFour $error)
    {
    }
}
