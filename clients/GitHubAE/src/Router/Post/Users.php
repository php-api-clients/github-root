<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Post;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Hydrators;
use ApiClients\Client\GitHubAE\Operator;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Client\GitHubAE\Schema\Key;
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
