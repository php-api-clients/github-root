<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Error;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use Error;

final class ValidationErrorSimple extends Error
{
    public function __construct(public int $status, public Schema\ValidationErrorSimple $error)
    {
    }
}
