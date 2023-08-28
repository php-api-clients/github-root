<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;

final class DependencyGraph
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\DependencyGraphDiff> */
    public function diffRange(string $owner, string $repo, string $basehead, string $name): iterable
    {
        return $this->operators->dependencyGraph👷DiffRange()->call($owner, $repo, $basehead, $name);
    }
}
