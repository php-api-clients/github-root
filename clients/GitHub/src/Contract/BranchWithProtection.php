<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\BranchProtection;
use ApiClients\Client\GitHub\Schema\BranchWithProtection\Links;
use ApiClients\Client\GitHub\Schema\Commit;

/**
 * @property string $name
 * @property Commit $commit
 * @property Links $links
 * @property bool $protected
 * @property BranchProtection $protection
 * @property string $protectionUrl
 * @property ?string $pattern
 * @property ?int $requiredApprovingReviewCount
 */
interface BranchWithProtection
{
}
