<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
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
        if (array_key_exists(Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb();
        }

        $operation = new Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb::class], $arguments['client_id'], $arguments['fingerprint']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }

    public function getOrCreateAuthorizationForApp(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Authorizations\Clients\CbClientIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀CbClientIdRcb();
        }

        $operation = new Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb::class], $arguments['client_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }
}
