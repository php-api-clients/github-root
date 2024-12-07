<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\BranchProtection;
use ApiClients\Client\GitHub\Schema\ShortBranch\Commit;

/**
 * @property string $name
 * @property Commit $commit
 * @property bool $protected
 * @property ?BranchProtection $protection
 * @property ?string $protectionUrl
 */
interface ShortBranch
{
}
