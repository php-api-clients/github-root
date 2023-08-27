<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GpgKey;
use ApiClients\Client\GitHubEnterprise\Schema\Key;
use ApiClients\Client\GitHubEnterprise\Schema\Migration;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Client\GitHubEnterprise\Schema\SshSigningKey;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |string|array{code:int}|iterable<Schema\Email>|Schema\GpgKey|Schema\Key|Schema\Migration|Schema\Project|Schema\Repository|iterable<Schema\SocialAccount>|Schema\SshSigningKey */
    public function call(string $call, array $params, array $pathChunks): GlobalHook|OrganizationSimple|PreReceiveEnvironment|PreReceiveHook|SimpleUser|string|iterable|GpgKey|Key|Migration|Project|Repository|SshSigningKey
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'POST /admin/hooks') {
                        return $this->routers->router🔀Post🔀EnterpriseAdmin()->createGlobalWebhook($params);
                    }
                } elseif ($pathChunks[2] === 'organizations') {
                    if ($call === 'POST /admin/organizations') {
                        return $this->routers->router🔀Post🔀EnterpriseAdmin()->createOrg($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'POST /admin/pre-receive-environments') {
                        return $this->routers->router🔀Post🔀EnterpriseAdmin()->createPreReceiveEnvironment($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($call === 'POST /admin/pre-receive-hooks') {
                        return $this->routers->router🔀Post🔀EnterpriseAdmin()->createPreReceiveHook($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'POST /admin/users') {
                        return $this->routers->router🔀Post🔀EnterpriseAdmin()->createUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'markdown') {
                if ($pathChunks[2] === 'raw') {
                    if ($call === 'POST /markdown/raw') {
                        return $this->routers->router🔀Post🔀Markdown()->renderRaw($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'POST /user/emails') {
                        return $this->routers->router🔀Post🔀Users()->addEmailForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'POST /user/gpg_keys') {
                        return $this->routers->router🔀Post🔀Users()->createGpgKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'POST /user/keys') {
                        return $this->routers->router🔀Post🔀Users()->createPublicSshKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'POST /user/migrations') {
                        return $this->routers->router🔀Post🔀Migrations()->startForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'projects') {
                    if ($call === 'POST /user/projects') {
                        return $this->routers->router🔀Post🔀Projects()->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'POST /user/repos') {
                        return $this->routers->router🔀Post🔀Repos()->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'POST /user/social_accounts') {
                        return $this->routers->router🔀Post🔀Users()->addSocialAccountForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($call === 'POST /user/ssh_signing_keys') {
                        return $this->routers->router🔀Post🔀Users()->createSshSigningKeyForAuthenticatedUser($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
