<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\ContentReferenceAttachment;
use ApiClients\Client\GitHubEnterprise\Schema\InstallationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Apps
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function createInstallationAccessToken(array $params): InstallationToken
    {
        $arguments = [];
        if (array_key_exists('installation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: installation_id');
        }

        $arguments['installation_id'] = $params['installation_id'];
        unset($params['installation_id']);
        $operator = new Internal\Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());

        return $operator->call($arguments['installation_id'], $params);
    }

    /** @return */
    public function scopeToken(array $params): Authorization
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        $operator = new Internal\Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped());

        return $operator->call($arguments['client_id'], $params);
    }

    /** @return */
    public function resetAuthorization(array $params): Authorization
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
        $operator = new Internal\Operator\Apps\ResetAuthorization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Tokens🌀AccessToken());

        return $operator->call($arguments['client_id'], $arguments['access_token']);
    }

    /** @return */
    public function redeliverWebhookDelivery(array $params): Json
    {
        $arguments = [];
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        $operator = new Internal\Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());

        return $operator->call($arguments['delivery_id']);
    }

    /** @return */
    public function createFromManifest(array $params): Integration
    {
        $arguments = [];
        if (array_key_exists('code', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: code');
        }

        $arguments['code'] = $params['code'];
        unset($params['code']);
        $operator = new Internal\Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());

        return $operator->call($arguments['code']);
    }

    /** @return */
    public function checkToken(array $params): Authorization
    {
        $arguments = [];
        if (array_key_exists('client_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_id');
        }

        $arguments['client_id'] = $params['client_id'];
        unset($params['client_id']);
        $operator = new Internal\Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());

        return $operator->call($arguments['client_id'], $params);
    }

    /** @return */
    public function createContentAttachment(array $params): ContentReferenceAttachment|WithoutBody
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
        $operator = new Internal\Operator\Apps\CreateContentAttachment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀ContentReferences🌀ContentReferenceId🌀Attachments());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['content_reference_id'], $params);
    }
}
