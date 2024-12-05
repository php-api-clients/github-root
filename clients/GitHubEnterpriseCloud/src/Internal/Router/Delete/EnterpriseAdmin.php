<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Delete;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class EnterpriseAdmin
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function disableSelectedOrganizationGithubActionsEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('org_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org_id');
        }

        $arguments['org_id'] = $params['org_id'];
        unset($params['org_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['org_id']);
    }

    /** @return */
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(array $params): Json
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels());

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    /** @return */
    public function deleteScimGroupFromEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('scim_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_group_id');
        }

        $arguments['scim_group_id'] = $params['scim_group_id'];
        unset($params['scim_group_id']);
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteScimGroupFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Enterprises🌀Enterprise🌀Groups🌀ScimGroupId());

        return $operator->call($arguments['scim_group_id'], $arguments['enterprise']);
    }

    /** @return */
    public function deleteUserFromEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('scim_user_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: scim_user_id');
        }

        $arguments['scim_user_id'] = $params['scim_user_id'];
        unset($params['scim_user_id']);
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteUserFromEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Scim🌀V2🌀Enterprises🌀Enterprise🌀Users🌀ScimUserId());

        return $operator->call($arguments['scim_user_id'], $arguments['enterprise']);
    }

    /** @return */
    public function deleteSelfHostedRunnerGroupFromEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id']);
    }

    /** @return */
    public function deleteSelfHostedRunnerFromEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_id']);
    }

    /** @return */
    public function deleteAuditLogStream(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('stream_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: stream_id');
        }

        $arguments['stream_id'] = $params['stream_id'];
        unset($params['stream_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\DeleteAuditLogStream($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['stream_id']);
    }

    public function removeEnterpriseCustomProperty(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('custom_property_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: custom_property_name');
        }

        $arguments['custom_property_name'] = $params['custom_property_name'];
        unset($params['custom_property_name']);
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveEnterpriseCustomProperty($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Properties🌀Schema🌀CustomPropertyName());

        return $operator->call($arguments['enterprise'], $arguments['custom_property_name']);
    }

    /** @return */
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists('org_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org_id');
        }

        $arguments['org_id'] = $params['org_id'];
        unset($params['org_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['org_id']);
    }

    /** @return */
    public function removeSelfHostedRunnerFromGroupForEnterprise(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_group_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_group_id');
        }

        $arguments['runner_group_id'] = $params['runner_group_id'];
        unset($params['runner_group_id']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->browser, $this->authentication);

        return $operator->call($arguments['enterprise'], $arguments['runner_group_id'], $arguments['runner_id']);
    }

    /** @return */
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(array $params): Ok
    {
        $arguments = [];
        if (array_key_exists('enterprise', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: enterprise');
        }

        $arguments['enterprise'] = $params['enterprise'];
        unset($params['enterprise']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        $operator = new Internal\Operator\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());

        return $operator->call($arguments['enterprise'], $arguments['runner_id'], $arguments['name']);
    }
}
