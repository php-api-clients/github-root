<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Patch;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\Announcement;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Client\GitHubAE\Schema\OrganizationFull;
use ApiClients\Client\GitHubAE\Schema\Project;
use ApiClients\Client\GitHubAE\Schema\TeamFull;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Announcement|GistSimple|OrganizationFull|Project|WithoutBody|TeamFull
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'announcement') {
                    if ($call === 'PATCH /enterprise/announcement') {
                        return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->setAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'PATCH /gists/{gist_id}') {
                        return $this->routers->internal🔀Router🔀Patch🔀Gists()->update($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'PATCH /orgs/{org}') {
                        return $this->routers->internal🔀Router🔀Patch🔀Orgs()->update($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'PATCH /projects/{project_id}') {
                        return $this->routers->internal🔀Router🔀Patch🔀Projects()->update($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'PATCH /teams/{team_id}') {
                        return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateLegacy($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
