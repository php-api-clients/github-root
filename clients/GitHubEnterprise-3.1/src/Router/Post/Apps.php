<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\ContentReferenceAttachment;
use ApiClients\Client\GitHubEnterprise\Schema\InstallationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Operation\Apps\CreateFromManifest\Response\Applicationjson\H201;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Apps
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

    public function createInstallationAccessToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists(Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens();
        }

        $operation = new Operation\Apps\CreateInstallationAccessToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens::class], $arguments['installation_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): InstallationToken {
            return $operation->createResponse($response);
        });
    }

    public function scopeToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped();
        }

        $operation = new Operation\Apps\ScopeToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped::class], $arguments['client_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }

    public function resetAuthorization(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists('access_token', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: access_token');
        }

        $arguments['access_token'] = $params['access_token'];
        unset($params['access_token']);
        if (array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb();
        }

        $operation = new Operation\Apps\ResetAuthorization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb::class], $arguments['client_id'], $arguments['access_token']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }

    public function createFromManifest(array $params)
    {
        $arguments = [];
        if (array_key_exists('code', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: code');
        }

        $arguments['code'] = $params['code'];
        unset($params['code']);
        if (array_key_exists(Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class] = $this->hydrators->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions();
        }

        $operation = new Operation\Apps\CreateFromManifest($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\AppManifests\CbCodeRcb\Conversions::class], $arguments['code']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): H201 {
            return $operation->createResponse($response);
        });
    }

    public function checkToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\CbClientIdRcb\Token::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token();
        }

        $operation = new Operation\Apps\CheckToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\CbClientIdRcb\Token::class], $arguments['client_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Authorization {
            return $operation->createResponse($response);
        });
    }

    public function createContentAttachment(array $params)
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('content_reference_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: content_reference_id');
        }

        $arguments['content_reference_id'] = $params['content_reference_id'];
        unset($params['content_reference_id']);
        if (array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments();
        }

        $operation = new Operation\Apps\CreateContentAttachment($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments::class], $arguments['owner'], $arguments['repo'], $arguments['content_reference_id']);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): ContentReferenceAttachment {
            return $operation->createResponse($response);
        });
    }
}
