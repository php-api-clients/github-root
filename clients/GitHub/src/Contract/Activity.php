<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $before
 * @property string $after
 * @property string $ref
 * @property string $timestamp
 * @property string $activityType
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $actor
 */
interface Activity
{
}
