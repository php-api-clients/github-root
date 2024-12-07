<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPing;

use ApiClients\Client\GitHub\Schema\HookResponse;
use ApiClients\Client\GitHub\Schema\WebhookPing\Hook\Config;

/**
 * @property bool $active
 * @property ?int $appId
 * @property Config $config
 * @property string $createdAt
 * @property ?string $deliveriesUrl
 * @property array $events
 * @property int $id
 * @property ?HookResponse $lastResponse
 * @property string $name
 * @property ?string $pingUrl
 * @property ?string $testUrl
 * @property string $type
 * @property string $updatedAt
 * @property ?string $url
 */
interface Hook
{
}
