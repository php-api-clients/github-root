<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Meta\Root\Response\ApplicationJson\Ok;
use InvalidArgumentException;

final class One
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Ok|array
    {
        if ($pathChunks[0] === '') {
            if ($call === 'GET /') {
                return $this->routers->router🔀Get🔀Meta()->root($params);
            }
        }

        throw new InvalidArgumentException();
    }
}
