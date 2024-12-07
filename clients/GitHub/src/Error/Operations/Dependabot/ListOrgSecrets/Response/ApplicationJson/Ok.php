<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson;

use Error;

final class Ok extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok $error)
    {
    }
}
