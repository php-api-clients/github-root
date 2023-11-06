<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Emojis
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function get(): Ok|WithoutBody
    {
        return $this->operators->emojis👷Get()->call();
    }
}
