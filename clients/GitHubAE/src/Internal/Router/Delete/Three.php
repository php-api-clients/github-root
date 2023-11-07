<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Delete;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'announcement') {
                    if ($call === 'DELETE /enterprise/announcement') {
                        return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->removeAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'DELETE /gists/{gist_id}') {
                        return $this->routers->internal🔀Router🔀Delete🔀Gists()->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'token') {
                    if ($call === 'DELETE /installation/token') {
                        return $this->routers->internal🔀Router🔀Delete🔀Apps()->revokeInstallationAccessToken($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'DELETE /projects/{project_id}') {
                        return $this->routers->internal🔀Router🔀Delete🔀Projects()->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'DELETE /teams/{team_id}') {
                        return $this->routers->internal🔀Router🔀Delete🔀Teams()->deleteLegacy($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
