<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $name
 * @property \ApiClients\Client\GitHub\Schema\Commit $commit
 * @property \ApiClients\Client\GitHub\Schema\BranchWithProtection\Links $links
 * @property bool $protected
 * @property \ApiClients\Client\GitHub\Schema\BranchProtection $protection
 * @property string $protectionUrl
 * @property ?string $pattern
 * @property ?int $requiredApprovingReviewCount
 */
interface BranchWithProtection
{
}
