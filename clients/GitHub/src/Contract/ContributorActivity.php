<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?SimpleUser $author
 * @property int $total
 * @property array $weeks
 */
interface ContributorActivity
{
}
