<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class OauthAuthorizations
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function deleteGrant(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('grant_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: grant_id');
        }

        $arguments['grant_id'] = $params['grant_id'];
        unset($params['grant_id']);
        if (array_key_exists(Hydrator\Operation\Applications\Grants\GrantId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\Grants\GrantId::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants🌀GrantId();
        }

        $operator = new Operator\OauthAuthorizations\DeleteGrant($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\Grants\GrantId::class]);

        return $operator->call($arguments['grant_id']);
    }

    /** @return array{code: int} */
    public function deleteAuthorization(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('authorization_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: authorization_id');
        }

        $arguments['authorization_id'] = $params['authorization_id'];
        unset($params['authorization_id']);
        if (array_key_exists(Hydrator\Operation\Authorizations\AuthorizationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\AuthorizationId::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀AuthorizationId();
        }

        $operator = new Operator\OauthAuthorizations\DeleteAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\AuthorizationId::class]);

        return $operator->call($arguments['authorization_id']);
    }
}
