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

final class Orgs
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Hydrators $hydrators, private readonly Browser $browser, private readonly AuthenticationInterface $authentication)
    {
    }

    public function list_(array $params)
    {
        $arguments = [];
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Operator\Orgs\List_($this->browser, $this->authentication);

        return $operator->call($arguments['since'], $arguments['per_page']);
    }

    public function get(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org();
        }

        $operator = new Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org::class]);

        return $operator->call($arguments['org']);
    }

    public function listForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Orgs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Orgs::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Orgs();
        }

        $operator = new Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Orgs::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    public function listCustomRoles(array $params)
    {
        $arguments = [];
        if (array_key_exists('organization_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: organization_id');
        }

        $arguments['organization_id'] = $params['organization_id'];
        unset($params['organization_id']);
        if (array_key_exists(Hydrator\Operation\Organizations\OrganizationId\CustomRoles::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Organizations\OrganizationId\CustomRoles::class] = $this->hydrators->getObjectMapperOperation🌀Organizations🌀OrganizationId🌀CustomRoles();
        }

        $operator = new Operator\Orgs\ListCustomRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Organizations\OrganizationId\CustomRoles::class]);

        return $operator->call($arguments['organization_id']);
    }

    public function getAuditLog(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('phrase', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: phrase');
        }

        $arguments['phrase'] = $params['phrase'];
        unset($params['phrase']);
        if (array_key_exists('include', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: include');
        }

        $arguments['include'] = $params['include'];
        unset($params['include']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('order', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: order');
        }

        $arguments['order'] = $params['order'];
        unset($params['order']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Operator\Orgs\GetAuditLog($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['per_page']);
    }

    public function listBlockedUsers(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Orgs\ListBlockedUsers($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listSamlSsoAuthorizations(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('login', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: login');
        }

        $arguments['login'] = $params['login'];
        unset($params['login']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Operator\Orgs\ListSamlSsoAuthorizations($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['page'], $arguments['login'], $arguments['per_page']);
    }

    public function listCustomRepoRoles(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\CustomRepositoryRoles::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRepositoryRoles::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRepositoryRoles();
        }

        $operator = new Operator\Orgs\ListCustomRepoRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRepositoryRoles::class]);

        return $operator->call($arguments['org']);
    }

    public function listFailedInvitations(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\FailedInvitations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\FailedInvitations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations();
        }

        $operator = new Operator\Orgs\ListFailedInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\FailedInvitations::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listFineGrainedPermissions(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Orgs\ListFineGrainedPermissions($this->browser, $this->authentication);

        return $operator->call($arguments['org']);
    }

    public function listWebhooks(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks();
        }

        $operator = new Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listAppInstallations(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Installations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Installations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations();
        }

        $operator = new Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Installations::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listPendingInvitations(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('role', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: role');
        }

        $arguments['role'] = $params['role'];
        unset($params['role']);
        if (array_key_exists('invitation_source', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: invitation_source');
        }

        $arguments['invitation_source'] = $params['invitation_source'];
        unset($params['invitation_source']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Invitations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Invitations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations();
        }

        $operator = new Operator\Orgs\ListPendingInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Invitations::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page'], $arguments['role'], $arguments['invitation_source']);
    }

    public function listMembers(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('filter', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: filter');
        }

        $arguments['filter'] = $params['filter'];
        unset($params['filter']);
        if (array_key_exists('role', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: role');
        }

        $arguments['role'] = $params['role'];
        unset($params['role']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Members::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Members::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members();
        }

        $operator = new Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Members::class]);

        return $operator->call($arguments['org'], $arguments['filter'], $arguments['role'], $arguments['per_page'], $arguments['page']);
    }

    public function listOutsideCollaborators(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('filter', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: filter');
        }

        $arguments['filter'] = $params['filter'];
        unset($params['filter']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['filter'], $arguments['per_page'], $arguments['page']);
    }

    public function listPatGrantRequests(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repository', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository');
        }

        $arguments['repository'] = $params['repository'];
        unset($params['repository']);
        if (array_key_exists('permission', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: permission');
        }

        $arguments['permission'] = $params['permission'];
        unset($params['permission']);
        if (array_key_exists('last_used_before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last_used_before');
        }

        $arguments['last_used_before'] = $params['last_used_before'];
        unset($params['last_used_before']);
        if (array_key_exists('last_used_after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last_used_after');
        }

        $arguments['last_used_after'] = $params['last_used_after'];
        unset($params['last_used_after']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests();
        }

        $operator = new Operator\Orgs\ListPatGrantRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class]);

        return $operator->call($arguments['org'], $arguments['owner'], $arguments['repository'], $arguments['permission'], $arguments['last_used_before'], $arguments['last_used_after'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);
    }

    public function listPatGrants(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repository', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository');
        }

        $arguments['repository'] = $params['repository'];
        unset($params['repository']);
        if (array_key_exists('permission', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: permission');
        }

        $arguments['permission'] = $params['permission'];
        unset($params['permission']);
        if (array_key_exists('last_used_before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last_used_before');
        }

        $arguments['last_used_before'] = $params['last_used_before'];
        unset($params['last_used_before']);
        if (array_key_exists('last_used_after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: last_used_after');
        }

        $arguments['last_used_after'] = $params['last_used_after'];
        unset($params['last_used_after']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens();
        }

        $operator = new Operator\Orgs\ListPatGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class]);

        return $operator->call($arguments['org'], $arguments['owner'], $arguments['repository'], $arguments['permission'], $arguments['last_used_before'], $arguments['last_used_after'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);
    }

    public function listPublicMembers(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Orgs\ListPublicMembers($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listRepoFineGrainedPermissions(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Orgs\ListRepoFineGrainedPermissions($this->browser, $this->authentication);

        return $operator->call($arguments['org']);
    }

    public function listSecurityManagerTeams(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Orgs\ListSecurityManagerTeams($this->browser, $this->authentication);

        return $operator->call($arguments['org']);
    }

    public function listMembershipsForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Memberships\Orgs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Memberships\Orgs::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs();
        }

        $operator = new Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Memberships\Orgs::class]);

        return $operator->call($arguments['state'], $arguments['per_page'], $arguments['page']);
    }

    public function listForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Operator\Orgs\ListForUser($this->browser, $this->authentication);

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    public function checkBlockedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Blocks\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Blocks\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username();
        }

        $operator = new Operator\Orgs\CheckBlockedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Blocks\Username::class]);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    public function getCustomRepoRole(array $params)
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRepositoryRoles🌀RoleId();
        }

        $operator = new Operator\Orgs\GetCustomRepoRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRepositoryRoles\RoleId::class]);

        return $operator->call($arguments['org'], $arguments['role_id']);
    }

    public function getCustomRole(array $params)
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\CustomRoles\RoleId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRoles\RoleId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRoles🌀RoleId();
        }

        $operator = new Operator\Orgs\GetCustomRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\CustomRoles\RoleId::class]);

        return $operator->call($arguments['org'], $arguments['role_id']);
    }

    public function getWebhook(array $params)
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId();
        }

        $operator = new Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId::class]);

        return $operator->call($arguments['org'], $arguments['hook_id']);
    }

    public function checkMembershipForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    public function getMembershipForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Memberships\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Memberships\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username();
        }

        $operator = new Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Memberships\Username::class]);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    public function checkPublicMembershipForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Operator\Orgs\CheckPublicMembershipForUser($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    public function getMembershipForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\User\Memberships\Orgs\Org::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Memberships\Orgs\Org::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org();
        }

        $operator = new Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Memberships\Orgs\Org::class]);

        return $operator->call($arguments['org']);
    }

    public function getWebhookConfigForOrg(array $params)
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Config::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config();
        }

        $operator = new Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Config::class]);

        return $operator->call($arguments['org'], $arguments['hook_id']);
    }

    public function listWebhookDeliveries(array $params)
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
        if (array_key_exists('cursor', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cursor');
        }

        $arguments['cursor'] = $params['cursor'];
        unset($params['cursor']);
        if (array_key_exists('redelivery', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: redelivery');
        }

        $arguments['redelivery'] = $params['redelivery'];
        unset($params['redelivery']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries();
        }

        $operator = new Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries::class]);

        return $operator->call($arguments['org'], $arguments['hook_id'], $arguments['cursor'], $arguments['redelivery'], $arguments['per_page']);
    }

    public function listInvitationTeams(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('invitation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: invitation_id');
        }

        $arguments['invitation_id'] = $params['invitation_id'];
        unset($params['invitation_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams();
        }

        $operator = new Operator\Orgs\ListInvitationTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams::class]);

        return $operator->call($arguments['org'], $arguments['invitation_id'], $arguments['per_page'], $arguments['page']);
    }

    public function listPatGrantRequestRepositories(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pat_request_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pat_request_id');
        }

        $arguments['pat_request_id'] = $params['pat_request_id'];
        unset($params['pat_request_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories();
        }

        $operator = new Operator\Orgs\ListPatGrantRequestRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['pat_request_id'], $arguments['per_page'], $arguments['page']);
    }

    public function listPatGrantRepositories(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('pat_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pat_id');
        }

        $arguments['pat_id'] = $params['pat_id'];
        unset($params['pat_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories();
        }

        $operator = new Operator\Orgs\ListPatGrantRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['pat_id'], $arguments['per_page'], $arguments['page']);
    }

    public function getWebhookDelivery(array $params)
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
        if (array_key_exists('delivery_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: delivery_id');
        }

        $arguments['delivery_id'] = $params['delivery_id'];
        unset($params['delivery_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId();
        }

        $operator = new Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId::class]);

        return $operator->call($arguments['org'], $arguments['hook_id'], $arguments['delivery_id']);
    }
}
