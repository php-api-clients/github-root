<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Error\Operations\Apps\GetInstallation\Response\ApplicationJson;

use ApiClients\Client\GitHubEnterprise\Schema;
use Error;

final class UnsupportedMediaType extends Error
{
    public function __construct(public int $status, public Schema\Operations\Apps\GetInstallation\Response\ApplicationJson\UnsupportedMediaType $error)
    {
    }
}
