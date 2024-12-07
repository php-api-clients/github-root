<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $type
 * @property int $id
 * @property string $name
 * @property bool $active
 * @property array $events
 * @property \ApiClients\Client\GitHub\Schema\WebhookConfig $config
 * @property string $updatedAt
 * @property string $createdAt
 * @property string $url
 * @property string $testUrl
 * @property string $pingUrl
 * @property ?string $deliveriesUrl
 * @property \ApiClients\Client\GitHub\Schema\HookResponse $lastResponse
 */
interface Hook
{
}
