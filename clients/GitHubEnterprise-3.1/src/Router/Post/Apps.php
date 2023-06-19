<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function createInstallationAccessToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        if (array_key_exists(Hydrator\Operation\App\Installations\InstallationId\AccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\App\Installations\InstallationId\AccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens();
        }

        $operator = new Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\App\Installations\InstallationId\AccessTokens::class]);

        return $operator->call($arguments['installation_id'], $params);
    }

    public function scopeToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Token\Scoped::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Token\Scoped::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped();
        }

        $operator = new Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Token\Scoped::class]);

        return $operator->call($arguments['client_id'], $params);
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
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Tokens\AccessToken::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Tokens\AccessToken::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken();
        }

        $operator = new Operator\Apps\ResetAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Tokens\AccessToken::class]);

        return $operator->call($arguments['client_id'], $arguments['access_token']);
    }

    public function createFromManifest(array $params)
    {
        $arguments = [];
        if (array_key_exists('code', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: code');
        }

        $arguments['code'] = $params['code'];
        unset($params['code']);
        if (array_key_exists(Hydrator\Operation\AppManifests\Code\Conversions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\AppManifests\Code\Conversions::class] = $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions();
        }

        $operator = new Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\AppManifests\Code\Conversions::class]);

        return $operator->call($arguments['code']);
    }

    public function checkToken(array $params)
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        if (array_key_exists(Hydrator\Operation\Applications\ClientId\Token::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Applications\ClientId\Token::class] = $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token();
        }

        $operator = new Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Applications\ClientId\Token::class]);

        return $operator->call($arguments['client_id'], $params);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments();
        }

        $operator = new Operator\Apps\CreateContentAttachment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\ContentReferences\ContentReferenceId\Attachments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['content_reference_id'], $params);
    }
}
