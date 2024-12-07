<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $version
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $user
 * @property \ApiClients\Client\GitHub\Schema\GistCommit\ChangeStatus $changeStatus
 * @property string $committedAt
 */
interface GistCommit
{
}
