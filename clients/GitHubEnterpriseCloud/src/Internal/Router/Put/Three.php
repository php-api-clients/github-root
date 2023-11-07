<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Put;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): InteractionLimitResponse
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'interaction-limits') {
                    if ($call === 'PUT /user/interaction-limits') {
                        return $this->routers->internal🔀Router🔀Put🔀Interactions()->setRestrictionsForAuthenticatedUser($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
