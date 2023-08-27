<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class OauthAuthorizations
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Schema\Authorization|array{code:int} */
    public function createAuthorization(array $params): Authorization|array
    {
        $operator = new Operator\OauthAuthorizations\CreateAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Authorizations());

        return $operator->call($params);
    }
}
