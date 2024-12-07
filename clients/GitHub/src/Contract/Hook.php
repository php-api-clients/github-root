<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\HookResponse;
use ApiClients\Client\GitHub\Schema\WebhookConfig;

/**
 * @property string $type
 * @property int $id
 * @property string $name
 * @property bool $active
 * @property array $events
 * @property WebhookConfig $config
 * @property string $updatedAt
 * @property string $createdAt
 * @property string $url
 * @property string $testUrl
 * @property string $pingUrl
 * @property ?string $deliveriesUrl
 * @property HookResponse $lastResponse
 */
interface Hook
{
}
