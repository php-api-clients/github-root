<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\Authorization>|array{code:int}|iterable<Schema\Event>|iterable<Schema\BaseGist>|iterable<Schema\Issue>|iterable<Schema\LicenseSimple>|iterable<Schema\Thread> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'authorizations') {
                if ($call === 'LIST /authorizations') {
                    return $this->routers->router🔀List🔀OauthAuthorizations()->listAuthorizationsListing($params);
                }
            } elseif ($pathChunks[1] === 'events') {
                if ($call === 'LIST /events') {
                    return $this->routers->router🔀List🔀Activity()->listPublicEventsListing($params);
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($call === 'LIST /gists') {
                    return $this->routers->router🔀List🔀Gists()->listListing($params);
                }
            } elseif ($pathChunks[1] === 'issues') {
                if ($call === 'LIST /issues') {
                    return $this->routers->router🔀List🔀Issues()->listListing($params);
                }
            } elseif ($pathChunks[1] === 'licenses') {
                if ($call === 'LIST /licenses') {
                    return $this->routers->router🔀List🔀Licenses()->getAllCommonlyUsedListing($params);
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($call === 'LIST /notifications') {
                    return $this->routers->router🔀List🔀Activity()->listNotificationsForAuthenticatedUserListing($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
