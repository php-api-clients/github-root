<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPing;

/**
 * @property bool $active
 * @property ?int $appId
 * @property \ApiClients\Client\GitHub\Schema\WebhookPing\Hook\Config $config
 * @property string $createdAt
 * @property ?string $deliveriesUrl
 * @property array $events
 * @property int $id
 * @property ?\ApiClients\Client\GitHub\Schema\HookResponse $lastResponse
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
