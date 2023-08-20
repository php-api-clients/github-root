<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GpgKey;
use ApiClients\Client\GitHubEnterprise\Schema\Key;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Users
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\Email> | array{code: int}) */
    public function addEmailForAuthenticatedUser(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Emails::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Emails::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Emails();
        }

        $operator = new Operator\Users\AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Emails::class]);

        return $operator->call($params);
    }

    /** @return (Schema\GpgKey | array{code: int}) */
    public function createGpgKeyForAuthenticatedUser(array $params): GpgKey|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\GpgKeys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\GpgKeys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys();
        }

        $operator = new Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\GpgKeys::class]);

        return $operator->call($params);
    }

    /** @return (Schema\Key | array{code: int}) */
    public function createPublicSshKeyForAuthenticatedUser(array $params): Key|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Keys::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Keys::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Keys();
        }

        $operator = new Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Keys::class]);

        return $operator->call($params);
    }
}
