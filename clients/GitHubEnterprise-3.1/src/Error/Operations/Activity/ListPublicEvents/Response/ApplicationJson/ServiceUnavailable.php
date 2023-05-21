<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Error\Operations\Activity\ListPublicEvents\Response\ApplicationJson;

use ApiClients\Client\GitHubEnterprise\Schema;
use Error;

final class ServiceUnavailable extends Error
{
    public function __construct(public int $status, public Schema\Operations\Activity\ListPublicEvents\Response\ApplicationJson\ServiceUnavailable $error)
    {
    }
}
