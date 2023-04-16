<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operation;
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

    public function deleteGrant(array $params)
    {
        $arguments = [];
        if (array_key_exists('grant_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: grant_id');
        }

        $arguments['grant_id'] = $params['grant_id'];
        unset($params['grant_id']);
        if (array_key_exists(Hydrator\Operation\Applications\Grants\CbGrantIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\Grants\CbGrantIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀Grants🌀CbGrantIdRcb();
        }

        $operation = new Operation\OauthAuthorizations\DeleteGrant($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\Grants\CbGrantIdRcb::class], $arguments['grant_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }

    public function deleteAuthorization(array $params)
    {
        $arguments = [];
        if (array_key_exists('authorization_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: authorization_id');
        }

        $arguments['authorization_id'] = $params['authorization_id'];
        unset($params['authorization_id']);
        if (array_key_exists(Hydrator\Operation\Authorizations\CbAuthorizationIdRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Authorizations\CbAuthorizationIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Authorizations🌀CbAuthorizationIdRcb();
        }

        $operation = new Operation\OauthAuthorizations\DeleteAuthorization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Authorizations\CbAuthorizationIdRcb::class], $arguments['authorization_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): mixed {
            return $operation->createResponse($response);
        });
    }
}
