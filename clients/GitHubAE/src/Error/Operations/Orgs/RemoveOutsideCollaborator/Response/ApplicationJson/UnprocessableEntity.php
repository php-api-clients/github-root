<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error\Operations\Orgs\RemoveOutsideCollaborator\Response\ApplicationJson;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class UnprocessableEntity extends Error
{
    public function __construct(public int $status, public Schema\Operations\Orgs\RemoveOutsideCollaborator\Response\ApplicationJson\UnprocessableEntity $error)
    {
    }
}
