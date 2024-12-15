<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\GistSimple;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Authorization|WithoutBody|GistSimple|string
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'authorizations') {
                if ($call === 'POST /authorizations') {
                    return $this->routers->internal🔀Router🔀Post🔀OauthAuthorizations()->createAuthorization($params);
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($call === 'POST /gists') {
                    return $this->routers->internal🔀Router🔀Post🔀Gists()->create($params);
                }
            } elseif ($pathChunks[1] === 'markdown') {
                if ($call === 'POST /markdown') {
                    return $this->routers->internal🔀Router🔀Post🔀Markdown()->render($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
