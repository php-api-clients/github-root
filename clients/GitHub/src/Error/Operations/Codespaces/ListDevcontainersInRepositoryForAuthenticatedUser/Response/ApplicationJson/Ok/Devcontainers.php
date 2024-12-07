<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok;

use Error;

final class Devcontainers extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Devcontainers $error)
    {
    }
}
