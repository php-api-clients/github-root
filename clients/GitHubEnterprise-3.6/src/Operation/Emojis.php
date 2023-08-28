<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok;

final class Emojis
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok|array{code:int} */
    public function get(): Ok|array
    {
        return $this->operators->emojis👷Get()->call();
    }
}
