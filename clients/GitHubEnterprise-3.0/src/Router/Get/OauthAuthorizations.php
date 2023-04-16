<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Router\Get;

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
    public function listGrants(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Applications\Grants::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Applications\Grants::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants();
        }
        $operation = new Operation\OauthAuthorizations\ListGrants($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\Grants::class], $arguments['client_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getAuthorization(array $params)
    {
        $arguments = array();
        if (array_key_exists('authorization_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: authorization_id');
        }
        $arguments['authorization_id'] = $params['authorization_id'];
        unset($params['authorization_id']);
        if (\array_key_exists(Hydrator\Operation\Authorizations\CbAuthorizationIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Authorizations\CbAuthorizationIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀CbAuthorizationIdRcb();
        }
        $operation = new Operation\OauthAuthorizations\GetAuthorization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\CbAuthorizationIdRcb::class], $arguments['authorization_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\Authorization {
            return $operation->createResponse($response);
        });
    }
    public function getGrant(array $params)
    {
        $arguments = array();
        if (array_key_exists('grant_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: grant_id');
        }
        $arguments['grant_id'] = $params['grant_id'];
        unset($params['grant_id']);
        if (\array_key_exists(Hydrator\Operation\Applications\Grants\CbGrantIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Applications\Grants\CbGrantIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants🌀CbGrantIdRcb();
        }
        $operation = new Operation\OauthAuthorizations\GetGrant($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\Grants\CbGrantIdRcb::class], $arguments['grant_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant {
            return $operation->createResponse($response);
        });
    }
    public function listAuthorizations(array $params)
    {
        $arguments = array();
        if (array_key_exists('client_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: client_id');
        }
        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (\array_key_exists(Hydrator\Operation\Authorizations::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Authorizations::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations();
        }
        $operation = new Operation\OauthAuthorizations\ListAuthorizations($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations::class], $arguments['client_id'], $arguments['per_page'], $arguments['page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
}
