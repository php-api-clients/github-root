<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;
use ApiClients\Client\GitHubEnterprise\Schema\Feed;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\PrivateUser;
use ApiClients\Client\GitHubEnterprise\Schema\PublicUser;
use ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\Integration|iterable<Schema\Authorization>|array{code:int}|iterable<Schema\CodeOfConduct>|Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|iterable<Schema\Event>|Schema\Feed|iterable<Schema\BaseGist>|iterable<Schema\Issue>|iterable<Schema\LicenseSimple>|Schema\ApiOverview|iterable<Schema\Thread>|ResponseInterface|iterable<Schema\OrganizationSimple>|Schema\RateLimitOverview|iterable<Schema\MinimalRepository>|Schema\PrivateUser|Schema\PublicUser|iterable<Schema\SimpleUser>|string */
    public function call(string $call, array $params, array $pathChunks): Integration|iterable|Json|Feed|ApiOverview|ResponseInterface|RateLimitOverview|PrivateUser|PublicUser|string
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($call === 'GET /app') {
                    return $this->routers->internal🔀Router🔀Get🔀Apps()->getAuthenticated($params);
                }
            } elseif ($pathChunks[1] === 'authorizations') {
                if ($call === 'GET /authorizations') {
                    return $this->routers->internal🔀Router🔀Get🔀OauthAuthorizations()->listAuthorizations($params);
                }
            } elseif ($pathChunks[1] === 'codes_of_conduct') {
                if ($call === 'GET /codes_of_conduct') {
                    return $this->routers->internal🔀Router🔀Get🔀CodesOfConduct()->getAllCodesOfConduct($params);
                }
            } elseif ($pathChunks[1] === 'emojis') {
                if ($call === 'GET /emojis') {
                    return $this->routers->internal🔀Router🔀Get🔀Emojis()->get($params);
                }
            } elseif ($pathChunks[1] === 'events') {
                if ($call === 'GET /events') {
                    return $this->routers->internal🔀Router🔀Get🔀Activity()->listPublicEvents($params);
                }
            } elseif ($pathChunks[1] === 'feeds') {
                if ($call === 'GET /feeds') {
                    return $this->routers->internal🔀Router🔀Get🔀Activity()->getFeeds($params);
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($call === 'GET /gists') {
                    return $this->routers->internal🔀Router🔀Get🔀Gists()->list($params);
                }
            } elseif ($pathChunks[1] === 'issues') {
                if ($call === 'GET /issues') {
                    return $this->routers->internal🔀Router🔀Get🔀Issues()->list($params);
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($call === 'GET /licenses') {
                    return $this->routers->internal🔀Router🔀Get🔀Licenses()->getAllCommonlyUsed($params);
                }
            } elseif ($pathChunks[1] === 'meta') {
                if ($call === 'GET /meta') {
                    return $this->routers->internal🔀Router🔀Get🔀Meta()->get($params);
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($call === 'GET /notifications') {
                    return $this->routers->internal🔀Router🔀Get🔀Activity()->listNotificationsForAuthenticatedUser($params);
                }
            } elseif ($pathChunks[1] === 'octocat') {
                if ($call === 'GET /octocat') {
                    return $this->routers->internal🔀Router🔀Get🔀Meta()->getOctocat($params);
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($call === 'GET /organizations') {
                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->list($params);
                }
            } elseif ($pathChunks[1] === 'rate_limit') {
                if ($call === 'GET /rate_limit') {
                    return $this->routers->internal🔀Router🔀Get🔀RateLimit()->get($params);
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($call === 'GET /repositories') {
                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listPublic($params);
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($call === 'GET /user') {
                    return $this->routers->internal🔀Router🔀Get🔀Users()->getAuthenticated($params);
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($call === 'GET /users') {
                    return $this->routers->internal🔀Router🔀Get🔀Users()->list($params);
                }
            } elseif ($pathChunks[1] === 'zen') {
                if ($call === 'GET /zen') {
                    return $this->routers->internal🔀Router🔀Get🔀Meta()->getZen($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
