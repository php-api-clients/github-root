<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\Authorization|array{code:int} */
    public function call(string $call, array $params, array $pathChunks): Authorization|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'authorizations') {
                if ($pathChunks[2] === 'clients') {
                    if ($pathChunks[3] === '{client_id}') {
                        if ($call === 'PUT /authorizations/clients/{client_id}') {
                            return $this->routers->router🔀Put🔀OauthAuthorizations()->getOrCreateAuthorizationForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'PUT /gists/{gist_id}/star') {
                            return $this->routers->router🔀Put🔀Gists()->star($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($call === 'PUT /setup/api/settings') {
                            return $this->routers->router🔀Put🔀EnterpriseAdmin()->setSettings($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/following/{username}') {
                            return $this->routers->router🔀Put🔀Users()->follow($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'site_admin') {
                        if ($call === 'PUT /users/{username}/site_admin') {
                            return $this->routers->router🔀Put🔀EnterpriseAdmin()->promoteUserToBeSiteAdministrator($params);
                        }
                    } elseif ($pathChunks[3] === 'suspended') {
                        if ($call === 'PUT /users/{username}/suspended') {
                            return $this->routers->router🔀Put🔀EnterpriseAdmin()->suspendUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
