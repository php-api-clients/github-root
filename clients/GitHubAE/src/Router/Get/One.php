<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Get;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema\Root;
use InvalidArgumentException;

final class One
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Root|array
    {
        if ($pathChunks[0] === '') {
            if ($call === 'GET /') {
                return $this->routers->router🔀Get🔀Meta()->root($params);
            }
        }

        throw new InvalidArgumentException();
    }
}
