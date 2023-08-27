<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\List;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return iterable<Schema\BaseGist>|array{code:int}|iterable<Schema\Issue>|iterable<Schema\LicenseSimple>|iterable<Schema\Thread> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
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
