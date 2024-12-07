<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $url
 * @property string $pingUrl
 * @property ?string $deliveriesUrl
 * @property string $name
 * @property array $events
 * @property bool $active
 * @property \ApiClients\Client\GitHub\Schema\OrgHook\Config $config
 * @property string $updatedAt
 * @property string $createdAt
 * @property string $type
 */
interface OrgHook
{
}
