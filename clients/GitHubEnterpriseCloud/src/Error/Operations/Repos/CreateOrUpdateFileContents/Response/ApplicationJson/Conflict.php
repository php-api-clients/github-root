<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Error\Operations\Repos\CreateOrUpdateFileContents\Response\ApplicationJson;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use Error;

final class Conflict extends Error
{
    public function __construct(public int $status, public Schema\Operations\Repos\CreateOrUpdateFileContents\Response\ApplicationJson\Conflict $error)
    {
    }
}
