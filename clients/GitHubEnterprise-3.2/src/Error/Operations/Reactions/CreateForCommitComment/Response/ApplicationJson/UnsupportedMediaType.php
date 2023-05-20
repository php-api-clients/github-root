<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Error\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson;

use ApiClients\Client\GitHubEnterprise\Schema;
use Error;

final class UnsupportedMediaType extends Error
{
    public function __construct(public int $status, public Schema\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson\UnsupportedMediaType $error)
    {
    }
}
