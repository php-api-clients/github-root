<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookMetaDeleted;

use ApiClients\Client\GitHub\Schema\WebhookMetaDeleted\Hook\Config;

/**
 * @property bool $active
 * @property Config $config
 * @property string $createdAt
 * @property array $events
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $updatedAt
 */
interface Hook
{
}
