<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Put;

use ApiClients\Client\GitHubAE\Internal\Routers;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int} */
    public function call(string $call, array $params, array $pathChunks): array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'PUT /gists/{gist_id}/star') {
                            return $this->routers->internal🔀Router🔀Put🔀Gists()->star($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/following/{username}') {
                            return $this->routers->internal🔀Router🔀Put🔀Users()->follow($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'suspended') {
                        if ($call === 'PUT /users/{username}/suspended') {
                            return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->suspendUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
