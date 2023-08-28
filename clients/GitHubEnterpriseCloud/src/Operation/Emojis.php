<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;

final class Emojis
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function get(): Json|array
    {
        return $this->operators->emojis👷Get()->call();
    }
}
