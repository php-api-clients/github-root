<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $status
 * @property \ApiClients\Client\GitHub\Schema\PageBuild\Error $error
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $pusher
 * @property string $commit
 * @property int $duration
 * @property string $createdAt
 * @property string $updatedAt
 */
interface PageBuild
{
}
