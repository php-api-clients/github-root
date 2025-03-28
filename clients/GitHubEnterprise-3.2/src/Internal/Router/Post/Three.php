<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GpgKey;
use ApiClients\Client\GitHubEnterprise\Schema\Key;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\Email>|WithoutBody */
    public function call(string $call, array $params, array $pathChunks): GlobalHook|OrganizationSimple|PreReceiveEnvironment|PreReceiveHook|SimpleUser|WithoutBody|string|iterable|GpgKey|Key|Project|Repository
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'POST /admin/hooks') {
                        return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createGlobalWebhook($params);
                    }
                } elseif ($pathChunks[2] === 'organizations') {
                    if ($call === 'POST /admin/organizations') {
                        return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createOrg($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'POST /admin/pre-receive-environments') {
                        return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createPreReceiveEnvironment($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($call === 'POST /admin/pre-receive-hooks') {
                        return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createPreReceiveHook($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'POST /admin/users') {
                        return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'markdown') {
                if ($pathChunks[2] === 'raw') {
                    if ($call === 'POST /markdown/raw') {
                        return $this->routers->internal🔀Router🔀Post🔀Markdown()->renderRaw($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'POST /user/emails') {
                        return $this->routers->internal🔀Router🔀Post🔀Users()->addEmailForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'POST /user/gpg_keys') {
                        return $this->routers->internal🔀Router🔀Post🔀Users()->createGpgKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'POST /user/keys') {
                        return $this->routers->internal🔀Router🔀Post🔀Users()->createPublicSshKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'projects') {
                    if ($call === 'POST /user/projects') {
                        return $this->routers->internal🔀Router🔀Post🔀Projects()->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'POST /user/repos') {
                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createForAuthenticatedUser($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
