<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodeSecurity
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function deleteConfigurationForEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: configuration_id');
        }

        $arguments['configuration_id'] = $params['configuration_id'];
        unset($params['configuration_id']);
        $operator = new Internal\Operator\CodeSecurity\DeleteConfigurationForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀CodeSecurity🌀Configurations🌀ConfigurationId());

        return $operator->call($arguments['enterprise'], $arguments['configuration_id']);
    }

    /** @return */
    public function detachConfiguration(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\CodeSecurity\DetachConfiguration($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀Detach());

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function deleteConfiguration(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('configuration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: configuration_id');
        }

        $arguments['configuration_id'] = $params['configuration_id'];
        unset($params['configuration_id']);
        $operator = new Internal\Operator\CodeSecurity\DeleteConfiguration($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeSecurity🌀Configurations🌀ConfigurationId());

        return $operator->call($arguments['org'], $arguments['configuration_id']);
    }
}
