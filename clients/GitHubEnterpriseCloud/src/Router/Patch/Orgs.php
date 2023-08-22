<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrators;
use ApiClients\Client\GitHubEnterpriseCloud\Operator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Orgs
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function updateWebhookConfigForOrg(array $params): WebhookConfig|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Config::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config();
        }

        $operator = new Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Config::class]);

        return $operator->call($arguments['org'], $arguments['hook_id'], $params);
    }

    /** @return */
    public function update(array $params): OrganizationFull|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org();
        }

        $operator = new Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function updateCustomRepoRole(array $params): OrganizationCustomRepositoryRole|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRepositoryRoles🌀RoleId();
        }

        $operator = new Operator\Orgs\UpdateCustomRepoRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId::class]);

        return $operator->call($arguments['org'], $arguments['role_id'], $params);
    }

    /** @return */
    public function updateCustomRole(array $params): OrganizationCustomRepositoryRole|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\CustomRoles\RoleId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRoles\RoleId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRoles🌀RoleId();
        }

        $operator = new Operator\Orgs\UpdateCustomRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRoles\RoleId::class]);

        return $operator->call($arguments['org'], $arguments['role_id'], $params);
    }

    /** @return */
    public function updateWebhook(array $params): OrgHook|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId();
        }

        $operator = new Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId::class]);

        return $operator->call($arguments['org'], $arguments['hook_id'], $params);
    }

    /** @return */
    public function updateMembershipForAuthenticatedUser(array $params): OrgMembership|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\User\Memberships\Orgs\Org::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Memberships\Orgs\Org::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org();
        }

        $operator = new Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Memberships\Orgs\Org::class]);

        return $operator->call($arguments['org'], $params);
    }
}
