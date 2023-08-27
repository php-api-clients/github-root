<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Operators;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;

final class Emojis
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function get(): Json|array
    {
        return $this->operators->emojis👷Get()->call();
    }
}
