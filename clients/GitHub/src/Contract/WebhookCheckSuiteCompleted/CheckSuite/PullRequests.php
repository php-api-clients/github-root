<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookCheckSuiteCompleted\CheckSuite;

use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base;
use ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Head;

/**
 * @property Base $base
 * @property Head $head
 * @property int $id
 * @property int $number
 * @property string $url
 */
interface PullRequests
{
}
