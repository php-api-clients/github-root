<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property int $number
 * @property string $url
 * @property \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head $head
 * @property \ApiClients\Client\GitHub\Schema\PullRequestMinimal\Base $base
 */
interface PullRequestMinimal
{
}
