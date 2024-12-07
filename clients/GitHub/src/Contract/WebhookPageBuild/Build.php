<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPageBuild;

use ApiClients\Client\GitHub\Schema\WebhookPageBuild\Build\Error;
use ApiClients\Client\GitHub\Schema\WebhookPageBuild\Build\Pusher;

/**
 * @property ?string $commit
 * @property string $createdAt
 * @property int $duration
 * @property Error $error
 * @property ?Pusher $pusher
 * @property string $status
 * @property string $updatedAt
 * @property string $url
 */
interface Build
{
}
