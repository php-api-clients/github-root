<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class UnsupportedMediaType extends Error
{
    public function __construct(public int $status, public Schema\Operations\Reactions\CreateForCommitComment\Response\ApplicationJson\UnsupportedMediaType $error)
    {
    }
}
