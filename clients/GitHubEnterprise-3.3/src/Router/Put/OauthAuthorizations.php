<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\ChunkSize;
final class OauthAuthorizations
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function getOrCreateAuthorizationForAppAndFingerprint(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('fingerprint', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: fingerprint');
        }
        $arguments['fingerprint'] = $params['fingerprint'];
        unset($params['fingerprint']);
        if (\array_key_exists(Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb();
        }
        $operation = new Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb::class], $arguments['client_id'], $arguments['fingerprint']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\Authorization {
            return $operation->createResponse($response);
        });
    }
    public function getOrCreateAuthorizationForApp(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (\array_key_exists(Hydrator\Operation\Authorizations\Clients\CbClientIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀Clients🌀CbClientIdRcb();
        }
        $operation = new Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\Clients\CbClientIdRcb::class], $arguments['client_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\Authorization {
            return $operation->createResponse($response);
        });
    }
}
