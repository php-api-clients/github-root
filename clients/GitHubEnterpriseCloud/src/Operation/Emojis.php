<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Emojis
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function get(): Json|WithoutBody
    {
        return $this->operators->emojis👷Get()->call();
    }
}
