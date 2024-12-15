<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Error\Operations\Git\CreateBlob\Response\ApplicationJson;

use ApiClients\Client\GitHubEnterprise\Schema;
use Error;

final class UnprocessableEntity extends Error
{
    public function __construct(public int $status, public Schema\Operations\Git\CreateBlob\Response\ApplicationJson\UnprocessableEntity $error)
    {
    }
}
