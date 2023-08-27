<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|array{code:int} */
    public function call(string $call, array $params, array $pathChunks): Accepted|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'notifications') {
                if ($call === 'PUT /notifications') {
                    return $this->routers->router🔀Put🔀Activity()->markNotificationsAsRead($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
