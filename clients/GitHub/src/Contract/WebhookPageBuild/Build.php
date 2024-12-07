<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPageBuild;

/**
 * @property ?string $commit
 * @property string $createdAt
 * @property int $duration
 * @property \ApiClients\Client\GitHub\Schema\WebhookPageBuild\Build\Error $error
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPageBuild\Build\Pusher $pusher
 * @property string $status
 * @property string $updatedAt
 * @property string $url
 */
interface Build
{
}
