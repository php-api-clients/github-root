<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Orgs
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function updateWebhookConfigForOrg(array $params): WebhookConfig
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Internal\Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());

        return $operator->call($arguments['org'], $arguments['hook_id'], $params);
    }

    /** @return */
    public function updateCustomRepoRole(array $params): OrganizationCustomRepositoryRole
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('role_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: role_id');
        }

        $arguments['role_id'] = $params['role_id'];
        unset($params['role_id']);
        $operator = new Internal\Operator\Orgs\UpdateCustomRepoRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRepositoryRoles🌀RoleId());

        return $operator->call($arguments['org'], $arguments['role_id'], $params);
    }

    /** @return */
    public function updateCustomRole(array $params): OrganizationCustomRepositoryRole
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('role_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: role_id');
        }

        $arguments['role_id'] = $params['role_id'];
        unset($params['role_id']);
        $operator = new Internal\Operator\Orgs\UpdateCustomRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRoles🌀RoleId());

        return $operator->call($arguments['org'], $arguments['role_id'], $params);
    }

    /** @return */
    public function updateWebhook(array $params): OrgHook
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        $operator = new Internal\Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());

        return $operator->call($arguments['org'], $arguments['hook_id'], $params);
    }

    /** @return */
    public function patchCustomOrganizationRole(array $params): OrganizationRole
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('role_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: role_id');
        }

        $arguments['role_id'] = $params['role_id'];
        unset($params['role_id']);
        $operator = new Internal\Operator\Orgs\PatchCustomOrganizationRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId());

        return $operator->call($arguments['org'], $arguments['role_id'], $params);
    }

    /** @return Observable<Schema\CustomProperty> */
    public function createOrUpdateCustomProperties(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\CreateOrUpdateCustomProperties($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema());

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function createOrUpdateCustomPropertiesValuesForRepos(array $params): WithoutBody
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function updateMembershipForAuthenticatedUser(array $params): OrgMembership
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function update(array $params): OrganizationFull
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());

        return $operator->call($arguments['org'], $params);
    }
}
