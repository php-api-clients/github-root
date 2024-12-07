<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson;

use Error;

final class Ok extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok $error)
    {
    }
}
