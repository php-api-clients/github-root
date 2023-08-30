<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Announcement;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\CodeOfConduct;
use ApiClients\Client\GitHubEnterprise\Schema\GistSimple;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\License;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterprise\Schema\PrivateUser;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\PublicUser;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\GlobalHook>|Observable<Schema\PublicKeyFull>|Observable<Schema\PreReceiveEnvironment>|Observable<Schema\PreReceiveHook>|Observable<Schema\Authorization>|Observable<Schema\IntegrationInstallationRequest>|array{code:int}|Observable<Schema\Installation>|Observable<Schema\ApplicationGrant>||Schema\Authorization|Schema\CodeOfConduct|Observable<Schema\BaseGist>|Schema\GistSimple|Observable<string>|Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|Schema\License|Schema\Project|Schema\Operations\Search\Code\Response\ApplicationJson\Ok|Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|Schema\Operations\Search\Users\Response\ApplicationJson\Ok|Observable<Schema\Email>|Observable<Schema\SimpleUser>|Observable<Schema\GpgKey>|Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|Observable<Schema\Issue>|Observable<Schema\Key>|Observable<Schema\Migration>|Observable<Schema\OrganizationSimple>|Observable<Schema\Repository>|Observable<Schema\RepositoryInvitation>|Observable<Schema\MinimalRepository>|Observable<Schema\TeamFull> */
    public function call(string $call, array $params, array $pathChunks): iterable|Integration|Authorization|CodeOfConduct|Announcement|GistSimple|Ok|License|OrganizationFull|Project|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|TeamFull|Json|PrivateUser|PublicUser
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'GET /admin/hooks') {
                        return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listGlobalWebhooks($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'GET /admin/keys') {
                        return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listPublicKeys($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'GET /admin/pre-receive-environments') {
                        return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listPreReceiveEnvironments($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($call === 'GET /admin/pre-receive-hooks') {
                        return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listPreReceiveHooks($params);
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($call === 'GET /admin/tokens') {
                        return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listPersonalAccessTokens($params);
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installation-requests') {
                    if ($call === 'GET /app/installation-requests') {
                        return $this->routers->internal🔀Router🔀Get🔀Apps()->listInstallationRequestsForAuthenticatedApp($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /app/installations') {
                        return $this->routers->internal🔀Router🔀Get🔀Apps()->listInstallations($params);
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === 'grants') {
                    if ($call === 'GET /applications/grants') {
                        return $this->routers->internal🔀Router🔀Get🔀OauthAuthorizations()->listGrants($params);
                    }
                }
            } elseif ($pathChunks[1] === 'apps') {
                if ($pathChunks[2] === '{app_slug}') {
                    if ($call === 'GET /apps/{app_slug}') {
                        return $this->routers->internal🔀Router🔀Get🔀Apps()->getBySlug($params);
                    }
                }
            } elseif ($pathChunks[1] === 'authorizations') {
                if ($pathChunks[2] === '{authorization_id}') {
                    if ($call === 'GET /authorizations/{authorization_id}') {
                        return $this->routers->internal🔀Router🔀Get🔀OauthAuthorizations()->getAuthorization($params);
                    }
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($pathChunks[2] === '{key}') {
                    if ($call === 'GET /codes_of_conduct/{key}') {
                        return $this->routers->internal🔀Router🔀Get🔀CodesOfConduct()->getConductCode($params);
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'announcement') {
                    if ($call === 'GET /enterprise/announcement') {
                        return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAnnouncement($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'GET /gists/public') {
                        return $this->routers->internal🔀Router🔀Get🔀Gists()->listPublic($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /gists/starred') {
                        return $this->routers->internal🔀Router🔀Get🔀Gists()->listStarred($params);
                    }
                } elseif ($pathChunks[2] === '{gist_id}') {
                    if ($call === 'GET /gists/{gist_id}') {
                        return $this->routers->internal🔀Router🔀Get🔀Gists()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($call === 'GET /gitignore/templates') {
                        return $this->routers->internal🔀Router🔀Get🔀Gitignore()->getAllTemplates($params);
                    }
                }
            } elseif ($pathChunks[1] === 'installation') {
                if ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /installation/repositories') {
                        return $this->routers->internal🔀Router🔀Get🔀Apps()->listReposAccessibleToInstallation($params);
                    }
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($pathChunks[2] === '{license}') {
                    if ($call === 'GET /licenses/{license}') {
                        return $this->routers->internal🔀Router🔀Get🔀Licenses()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($call === 'GET /orgs/{org}') {
                        return $this->routers->internal🔀Router🔀Get🔀Orgs()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($call === 'GET /projects/{project_id}') {
                        return $this->routers->internal🔀Router🔀Get🔀Projects()->get($params);
                    }
                }
            } elseif ($pathChunks[1] === 'search') {
                if ($pathChunks[2] === 'code') {
                    if ($call === 'GET /search/code') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->code($params);
                    }
                } elseif ($pathChunks[2] === 'commits') {
                    if ($call === 'GET /search/commits') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->commits($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /search/issues') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->issuesAndPullRequests($params);
                    }
                } elseif ($pathChunks[2] === 'labels') {
                    if ($call === 'GET /search/labels') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->labels($params);
                    }
                } elseif ($pathChunks[2] === 'repositories') {
                    if ($call === 'GET /search/repositories') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->repos($params);
                    }
                } elseif ($pathChunks[2] === 'topics') {
                    if ($call === 'GET /search/topics') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->topics($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'GET /search/users') {
                        return $this->routers->internal🔀Router🔀Get🔀Search()->users($params);
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($call === 'GET /teams/{team_id}') {
                        return $this->routers->internal🔀Router🔀Get🔀Teams()->getLegacy($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'GET /user/emails') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->listEmailsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'GET /user/followers') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->listFollowersForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'GET /user/following') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->listFollowedByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'GET /user/gpg_keys') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->listGpgKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($call === 'GET /user/installations') {
                        return $this->routers->internal🔀Router🔀Get🔀Apps()->listInstallationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'GET /user/issues') {
                        return $this->routers->internal🔀Router🔀Get🔀Issues()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'GET /user/keys') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->listPublicSshKeysForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($call === 'GET /user/migrations') {
                        return $this->routers->internal🔀Router🔀Get🔀Migrations()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'GET /user/orgs') {
                        return $this->routers->internal🔀Router🔀Get🔀Orgs()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'GET /user/public_emails') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->listPublicEmailsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'GET /user/repos') {
                        return $this->routers->internal🔀Router🔀Get🔀Repos()->listForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'GET /user/repository_invitations') {
                        return $this->routers->internal🔀Router🔀Get🔀Repos()->listInvitationsForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'GET /user/starred') {
                        return $this->routers->internal🔀Router🔀Get🔀Activity()->listReposStarredByAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'GET /user/subscriptions') {
                        return $this->routers->internal🔀Router🔀Get🔀Activity()->listWatchedReposForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'GET /user/teams') {
                        return $this->routers->internal🔀Router🔀Get🔀Teams()->listForAuthenticatedUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($call === 'GET /users/{username}') {
                        return $this->routers->internal🔀Router🔀Get🔀Users()->getByUsername($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
