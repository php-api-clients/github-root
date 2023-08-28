<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Meta\Root\Response\ApplicationJson\Ok;
use InvalidArgumentException;

final class One
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\Operations\Meta\Root\Response\ApplicationJson\Ok */
    public function call(string $call, array $params, array $pathChunks): Ok|array
    {
        if ($pathChunks[0] === '') {
            if ($call === 'GET /') {
                return $this->routers->internal🔀Router🔀Get🔀Meta()->root($params);
            }
        }

        throw new InvalidArgumentException();
    }
}
