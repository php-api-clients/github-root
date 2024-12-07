<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok;

use Error;

final class Defaults extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok\Defaults $error)
    {
    }
}
