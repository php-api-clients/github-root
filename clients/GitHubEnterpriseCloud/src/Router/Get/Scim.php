<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Scim
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

    public function listProvisionedIdentities(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('startIndex', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: startIndex');
        }

        $arguments['startIndex'] = $params['startIndex'];
        unset($params['startIndex']);
        if (array_key_exists('count', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: count');
        }

        $arguments['count'] = $params['count'];
        unset($params['count']);
        if (array_key_exists('filter', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: filter');
        }

        $arguments['filter'] = $params['filter'];
        unset($params['filter']);
        if (array_key_exists(Hydrator\Operation\Scim\V2\Organizations\Org\Users::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Scim\V2\Organizations\Org\Users::class] = $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users();
        }

        $operator = new Operator\Scim\ListProvisionedIdentities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Scim\V2\Organizations\Org\Users::class]);

        return $operator->call($arguments['org'], $arguments['startIndex'], $arguments['count'], $arguments['filter']);
    }

    public function getProvisioningInformationForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('scim_user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_user_id');
        }

        $arguments['scim_user_id'] = $params['scim_user_id'];
        unset($params['scim_user_id']);
        if (array_key_exists(Hydrator\Operation\Scim\V2\Organizations\Org\Users\ScimUserId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Scim\V2\Organizations\Org\Users\ScimUserId::class] = $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users🌀ScimUserId();
        }

        $operator = new Operator\Scim\GetProvisioningInformationForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Scim\V2\Organizations\Org\Users\ScimUserId::class]);

        return $operator->call($arguments['org'], $arguments['scim_user_id']);
    }
}
