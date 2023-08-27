<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}| */
    public function call(string $call, array $params, array $pathChunks): Json|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'authorizations') {
                if ($pathChunks[2] === '{authorization_id}') {
                    if ($call === 'DELETE /authorizations/{authorization_id}') {
                        return $this->routers->router🔀Delete🔀OauthAuthorizations()->deleteAuthorization($params);
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'announcement') {
                    if ($call === 'DELETE /enterprise/announcement') {
                        return $this->routers->router🔀Delete🔀EnterpriseAdmin()->removeAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'DELETE /gists/{gist_id}') {
                        return $this->routers->router🔀Delete🔀Gists()->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'token') {
                    if ($call === 'DELETE /installation/token') {
                        return $this->routers->router🔀Delete🔀Apps()->revokeInstallationAccessToken($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'DELETE /orgs/{org}') {
                        return $this->routers->router🔀Delete🔀Orgs()->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'DELETE /projects/{project_id}') {
                        return $this->routers->router🔀Delete🔀Projects()->delete($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'DELETE /teams/{team_id}') {
                        return $this->routers->router🔀Delete🔀Teams()->deleteLegacy($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'DELETE /user/emails') {
                        return $this->routers->router🔀Delete🔀Users()->deleteEmailForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'DELETE /user/social_accounts') {
                        return $this->routers->router🔀Delete🔀Users()->deleteSocialAccountForAuthenticatedUser($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
