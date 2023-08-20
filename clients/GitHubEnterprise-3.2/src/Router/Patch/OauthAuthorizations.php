<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
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

    /** @return */
    public function updateAuthorization(array $params): Authorization|array
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

        $operator = new Operator\OauthAuthorizations\UpdateAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\AuthorizationId::class]);

        return $operator->call($arguments['authorization_id'], $params);
    }
}
