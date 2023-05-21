<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

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
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function getOrCreateAuthorizationForAppAndFingerprint(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('fingerprint', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: fingerprint');
        }

        $arguments['fingerprint'] = $params['fingerprint'];
        unset($params['fingerprint']);
        if (array_key_exists(Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId🌀Fingerprint();
        }

        $operator = new Operator\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\Clients\ClientId\Fingerprint::class]);

        return $operator->call($arguments['client_id'], $arguments['fingerprint'], $params);
    }

    public function getOrCreateAuthorizationForApp(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Authorizations\Clients\ClientId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\Clients\ClientId::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀ClientId();
        }

        $operator = new Operator\OauthAuthorizations\GetOrCreateAuthorizationForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\Clients\ClientId::class]);

        return $operator->call($arguments['client_id'], $params);
    }
}
