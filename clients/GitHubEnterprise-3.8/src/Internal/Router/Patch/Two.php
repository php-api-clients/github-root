<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\PrivateUser;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\PrivateUser|array{code:int} */
    public function call(string $call, array $params, array $pathChunks): PrivateUser|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'user') {
                if ($call === 'PATCH /user') {
                    return $this->routers->internal🔀Router🔀Patch🔀Users()->updateAuthenticated($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
