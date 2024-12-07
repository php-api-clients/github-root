<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Post;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operator\Users\AddEmailForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\AddSocialAccountForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Internal\Operator\Users\CreateSshSigningKeyForAuthenticatedUser;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
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
    public function addEmailForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        $operator = new AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());

        return $operator->call($params);
    }

    /** @return */
    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|WithoutBody
    {
        $operator = new CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());

        return $operator->call($params);
    }

    /** @return */
    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|WithoutBody
    {
        $operator = new CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());

        return $operator->call($params);
    }

    /** @return Observable<SocialAccount>|WithoutBody */
    public function addSocialAccountForAuthenticatedUser(array $params): iterable|WithoutBody
    {
        $operator = new AddSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());

        return $operator->call($params);
    }

    /** @return */
    public function createSshSigningKeyForAuthenticatedUser(array $params): SshSigningKey|WithoutBody
    {
        $operator = new CreateSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());

        return $operator->call($params);
    }
}
