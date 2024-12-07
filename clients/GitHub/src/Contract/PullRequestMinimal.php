<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\PullRequestMinimal\Base;
use ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head;

/**
 * @property int $id
 * @property int $number
 * @property string $url
 * @property Head $head
 * @property Base $base
 */
interface PullRequestMinimal
{
}
