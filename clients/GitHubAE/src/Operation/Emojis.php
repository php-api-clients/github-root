<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation;

use ApiClients\Client\GitHubAE\Internal;
use ApiClients\Client\GitHubAE\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
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
