<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteCompleted\CheckSuite\PullRequests;

use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base\Repo;

/**
 * @property string $ref
 * @property Repo $repo
 * @property string $sha
 */
interface Base
{
}
