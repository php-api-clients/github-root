<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Scim
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function listProvisionedIdentities(array $params): ScimUserList|WithoutBody
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
        $operator = new Internal\Operator\Scim\ListProvisionedIdentities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users());

        return $operator->call($arguments['org'], $arguments['startIndex'], $arguments['count'], $arguments['filter']);
    }

    /** @return */
    public function getProvisioningInformationForUser(array $params): ScimUser|WithoutBody
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
        $operator = new Internal\Operator\Scim\GetProvisioningInformationForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀Org🌀Users🌀ScimUserId());

        return $operator->call($arguments['org'], $arguments['scim_user_id']);
    }
}
