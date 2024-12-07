<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Patch;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\UpdateAuthenticated;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Users
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Email>|WithoutBody */
    public function setPrimaryEmailVisibilityForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        $operator = new SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility());

        return $operator->call($params);
    }

    /** @return */
    public function updateAuthenticated(array $params): PrivateUser|WithoutBody
    {
        $operator = new UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());

        return $operator->call($params);
    }
}
