<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Post;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespace;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\FullRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GpgKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Key;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Migration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Project;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SshSigningKey;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\Email>|WithoutBody|Observable<Schema\SocialAccount> */
    public function call(string $call, array $params, array $pathChunks): WithoutBody|string|Codespace|iterable|GpgKey|Key|Migration|Project|FullRepository|SshSigningKey
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'markdown') {
                if ($pathChunks[2] === 'raw') {
                    if ($call === 'POST /markdown/raw') {
                        return $this->routers->internal🔀Router🔀Post🔀Markdown()->renderRaw($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($call === 'POST /user/codespaces') {
                        return $this->routers->internal🔀Router🔀Post🔀Codespaces()->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'emails') {
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
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'POST /user/migrations') {
                        return $this->routers->internal🔀Router🔀Post🔀Migrations()->startForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'projects') {
                    if ($call === 'POST /user/projects') {
                        return $this->routers->internal🔀Router🔀Post🔀Projects()->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'POST /user/repos') {
                        return $this->routers->internal🔀Router🔀Post🔀Repos()->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'social_accounts') {
                    if ($call === 'POST /user/social_accounts') {
                        return $this->routers->internal🔀Router🔀Post🔀Users()->addSocialAccountForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($call === 'POST /user/ssh_signing_keys') {
                        return $this->routers->internal🔀Router🔀Post🔀Users()->createSshSigningKeyForAuthenticatedUser($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
