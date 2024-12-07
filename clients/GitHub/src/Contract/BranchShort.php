<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\BranchShort\Commit;

/**
 * @property string $name
 * @property Commit $commit
 * @property bool $protected
 */
interface BranchShort
{
}
