<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\List;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\GlobalHook>|Observable<Schema\PublicKeyFull>|Observable<Schema\PreReceiveEnvironment>|Observable<Schema\PreReceiveHook>|Observable<Schema\Authorization>|Observable<Schema\IntegrationInstallationRequest>|WithoutBody|Observable<Schema\Installation>|Observable<Schema\ApplicationGrant>|Observable<Schema\BaseGist>|Observable<Schema\Email>|Observable<Schema\SimpleUser>|Observable<Schema\GpgKey>|Observable<Schema\Issue>|Observable<Schema\Key>|Observable<Schema\Migration>|Observable<Schema\OrganizationSimple>|Observable<Schema\Repository>|Observable<Schema\RepositoryInvitation>|Observable<Schema\MinimalRepository>|Observable<Schema\TeamFull> */
    public function call(string $call, array $params, array $pathChunks): iterable|WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'LIST /admin/hooks') {
                        return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->listGlobalWebhooksListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /admin/keys') {
                        return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->listPublicKeysListing($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'LIST /admin/pre-receive-environments') {
                        return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->listPreReceiveEnvironmentsListing($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($call === 'LIST /admin/pre-receive-hooks') {
                        return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->listPreReceiveHooksListing($params);
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($call === 'LIST /admin/tokens') {
                        return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->listPersonalAccessTokensListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'LIST /app/installation-requests') {
                        return $this->routers->internal🔀Router🔀List🔀Apps()->listInstallationRequestsForAuthenticatedAppListing($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'LIST /app/installations') {
                        return $this->routers->internal🔀Router🔀List🔀Apps()->listInstallationsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === 'grants') {
                    if ($call === 'LIST /applications/grants') {
                        return $this->routers->internal🔀Router🔀List🔀OauthAuthorizations()->listGrantsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'LIST /gists/public') {
                        return $this->routers->internal🔀Router🔀List🔀Gists()->listPublicListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /gists/starred') {
                        return $this->routers->internal🔀Router🔀List🔀Gists()->listStarredListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'LIST /user/emails') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'LIST /user/followers') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listFollowersForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'LIST /user/following') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listFollowedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'LIST /user/gpg_keys') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listGpgKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'LIST /user/issues') {
                        return $this->routers->internal🔀Router🔀List🔀Issues()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /user/keys') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listPublicSshKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'LIST /user/migrations') {
                        return $this->routers->internal🔀Router🔀List🔀Migrations()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'LIST /user/orgs') {
                        return $this->routers->internal🔀Router🔀List🔀Orgs()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'LIST /user/public_emails') {
                        return $this->routers->internal🔀Router🔀List🔀Users()->listPublicEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'LIST /user/repos') {
                        return $this->routers->internal🔀Router🔀List🔀Repos()->listForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'LIST /user/repository_invitations') {
                        return $this->routers->internal🔀Router🔀List🔀Repos()->listInvitationsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /user/starred') {
                        return $this->routers->internal🔀Router🔀List🔀Activity()->listReposStarredByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'LIST /user/subscriptions') {
                        return $this->routers->internal🔀Router🔀List🔀Activity()->listWatchedReposForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'LIST /user/teams') {
                        return $this->routers->internal🔀Router🔀List🔀Teams()->listForAuthenticatedUserListing($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
