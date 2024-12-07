<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $name
 * @property \ApiClients\Client\GitHub\Schema\ShortBranch\Commit $commit
 * @property bool $protected
 * @property ?\ApiClients\Client\GitHub\Schema\BranchProtection $protection
 * @property ?string $protectionUrl
 */
interface ShortBranch
{
}
