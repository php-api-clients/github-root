<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CustomProperty;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RulesetVersion;
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

    /** @return Observable<Schema\OrganizationSimple>|WithoutBody */
    public function list(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());

        return $operator->call($arguments['since'], $arguments['per_page']);
    }

    /** @return */
    public function get(array $params): OrganizationFull
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUser(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listCustomRoles(array $params): Ok
    {
        $arguments = [];
        if (array_key_exists('organization_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: organization_id');
        }

        $arguments['organization_id'] = $params['organization_id'];
        unset($params['organization_id']);
        $operator = new Internal\Operator\Orgs\ListCustomRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations🌀OrganizationId🌀CustomRoles());

        return $operator->call($arguments['organization_id']);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLog(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\GetAuditLog($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀AuditLog());

        return $operator->call($arguments['org'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['per_page']);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listBlockedUsers(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListBlockedUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\CredentialAuthorization> */
    public function listSamlSsoAuthorizations(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListSamlSsoAuthorizations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CredentialAuthorizations());

        return $operator->call($arguments['org'], $arguments['page'], $arguments['login'], $arguments['per_page']);
    }

    /** @return */
    public function listCustomRepoRoles(array $params): Json
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListCustomRepoRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRepositoryRoles());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listFailedInvitations(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListFailedInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\RepositoryFineGrainedPermission> */
    public function listFineGrainedPermissions(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListFineGrainedPermissions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FineGrainedPermissions());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\OrgHook> */
    public function listWebhooks(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listAppInstallations(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok
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
        $operator = new Internal\Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitations(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListPendingInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page'], $arguments['role'], $arguments['invitation_source']);
    }

    /** @return iterable<int,Schema\IssueType> */
    public function listIssueTypes(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListIssueTypes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀IssueTypes());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembers(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());

        return $operator->call($arguments['org'], $arguments['filter'], $arguments['role'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\OrganizationFineGrainedPermission> */
    public function listOrganizationFineGrainedPermissions(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListOrganizationFineGrainedPermissions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function listOrgRoles(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListOrgRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listOutsideCollaborators(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());

        return $operator->call($arguments['org'], $arguments['filter'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequests(array $params): iterable
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
        if (array_key_exists('token_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token_id');
        }

        $arguments['token_id'] = $params['token_id'];
        unset($params['token_id']);
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
        $operator = new Internal\Operator\Orgs\ListPatGrantRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());

        return $operator->call($arguments['org'], $arguments['owner'], $arguments['repository'], $arguments['permission'], $arguments['last_used_before'], $arguments['last_used_after'], $arguments['token_id'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrant> */
    public function listPatGrants(array $params): iterable
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
        if (array_key_exists('token_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token_id');
        }

        $arguments['token_id'] = $params['token_id'];
        unset($params['token_id']);
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
        $operator = new Internal\Operator\Orgs\ListPatGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());

        return $operator->call($arguments['org'], $arguments['owner'], $arguments['repository'], $arguments['permission'], $arguments['last_used_before'], $arguments['last_used_after'], $arguments['token_id'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listPublicMembers(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListPublicMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\RepositoryFineGrainedPermission> */
    public function listRepoFineGrainedPermissions(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListRepoFineGrainedPermissions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀RepositoryFineGrainedPermissions());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\TeamSimple> */
    public function listSecurityManagerTeams(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\ListSecurityManagerTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUser(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());

        return $operator->call($arguments['state'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\OrganizationSimple> */
    public function listForUser(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());

        return $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listAttestations(array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok
    {
        $arguments = [];
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('subject_digest', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: subject_digest');
        }

        $arguments['subject_digest'] = $params['subject_digest'];
        unset($params['subject_digest']);
        if (array_key_exists('predicate_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: predicate_type');
        }

        $arguments['predicate_type'] = $params['predicate_type'];
        unset($params['predicate_type']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Internal\Operator\Orgs\ListAttestations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Attestations🌀SubjectDigest());

        return $operator->call($arguments['before'], $arguments['after'], $arguments['org'], $arguments['subject_digest'], $arguments['predicate_type'], $arguments['per_page']);
    }

    /** @return */
    public function checkBlockedUser(array $params): WithoutBody
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
        $operator = new Internal\Operator\Orgs\CheckBlockedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());

        return $operator->call($arguments['org'], $arguments['username']);
    }

    /** @return Observable<Schema\PushRuleBypassRequest> */
    public function listPushBypassRequests(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repository_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_name');
        }

        $arguments['repository_name'] = $params['repository_name'];
        unset($params['repository_name']);
        if (array_key_exists('reviewer', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: reviewer');
        }

        $arguments['reviewer'] = $params['reviewer'];
        unset($params['reviewer']);
        if (array_key_exists('requester', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: requester');
        }

        $arguments['requester'] = $params['requester'];
        unset($params['requester']);
        if (array_key_exists('time_period', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: time_period');
        }

        $arguments['time_period'] = $params['time_period'];
        unset($params['time_period']);
        if (array_key_exists('request_status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: request_status');
        }

        $arguments['request_status'] = $params['request_status'];
        unset($params['request_status']);
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
        $operator = new Internal\Operator\Orgs\ListPushBypassRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀BypassRequests🌀PushRules());

        return $operator->call($arguments['org'], $arguments['repository_name'], $arguments['reviewer'], $arguments['requester'], $arguments['time_period'], $arguments['request_status'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getCustomRepoRole(array $params): OrganizationCustomRepositoryRole
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
        $operator = new Internal\Operator\Orgs\GetCustomRepoRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRepositoryRoles🌀RoleId());

        return $operator->call($arguments['org'], $arguments['role_id']);
    }

    /** @return */
    public function getCustomRole(array $params): OrganizationCustomRepositoryRole
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
        $operator = new Internal\Operator\Orgs\GetCustomRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CustomRoles🌀RoleId());

        return $operator->call($arguments['org'], $arguments['role_id']);
    }

    /** @return */
    public function getWebhook(array $params): OrgHook
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
        $operator = new Internal\Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());

        return $operator->call($arguments['org'], $arguments['hook_id']);
    }

    /** @return */
    public function checkMembershipForUser(array $params): WithoutBody
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
        $operator = new Internal\Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    /** @return */
    public function getMembershipForUser(array $params): OrgMembership
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
        $operator = new Internal\Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());

        return $operator->call($arguments['org'], $arguments['username']);
    }

    /** @return */
    public function getOrgRole(array $params): OrganizationRole
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
        $operator = new Internal\Operator\Orgs\GetOrgRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId());

        return $operator->call($arguments['org'], $arguments['role_id']);
    }

    /** @return Observable<Schema\CustomProperty> */
    public function getAllCustomProperties(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\GetAllCustomProperties($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema());

        return $operator->call($arguments['org']);
    }

    /** @return Observable<Schema\OrgRepoCustomPropertyValues> */
    public function listCustomPropertiesValuesForRepos(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repository_query', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_query');
        }

        $arguments['repository_query'] = $params['repository_query'];
        unset($params['repository_query']);
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
        $operator = new Internal\Operator\Orgs\ListCustomPropertiesValuesForRepos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());

        return $operator->call($arguments['org'], $arguments['repository_query'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function checkPublicMembershipForUser(array $params): WithoutBody
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
        $operator = new Internal\Operator\Orgs\CheckPublicMembershipForUser($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    /** @return */
    public function getMembershipForAuthenticatedUser(array $params): OrgMembership
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Internal\Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getWebhookConfigForOrg(array $params): WebhookConfig
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
        $operator = new Internal\Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());

        return $operator->call($arguments['org'], $arguments['hook_id']);
    }

    /** @return Observable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(array $params): iterable
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        $operator = new Internal\Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());

        return $operator->call($arguments['org'], $arguments['hook_id'], $arguments['cursor'], $arguments['per_page']);
    }

    /** @return Observable<Schema\Team> */
    public function listInvitationTeams(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListInvitationTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());

        return $operator->call($arguments['org'], $arguments['invitation_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\TeamRoleAssignment>|WithoutBody */
    public function listOrgRoleTeams(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Orgs\ListOrgRoleTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams());

        return $operator->call($arguments['org'], $arguments['role_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\UserRoleAssignment>|WithoutBody */
    public function listOrgRoleUsers(array $params): iterable|WithoutBody
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
        $operator = new Internal\Operator\Orgs\ListOrgRoleUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users());

        return $operator->call($arguments['org'], $arguments['role_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRequestRepositories(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListPatGrantRequestRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());

        return $operator->call($arguments['org'], $arguments['pat_request_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRepositories(array $params): iterable
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
        $operator = new Internal\Operator\Orgs\ListPatGrantRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());

        return $operator->call($arguments['org'], $arguments['pat_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getCustomProperty(array $params): CustomProperty
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('custom_property_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: custom_property_name');
        }

        $arguments['custom_property_name'] = $params['custom_property_name'];
        unset($params['custom_property_name']);
        $operator = new Internal\Operator\Orgs\GetCustomProperty($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());

        return $operator->call($arguments['org'], $arguments['custom_property_name']);
    }

    /** @return Observable<Schema\RulesetVersion> */
    public function getOrgRulesetHistory(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('ruleset_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ruleset_id');
        }

        $arguments['ruleset_id'] = $params['ruleset_id'];
        unset($params['ruleset_id']);
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
        $operator = new Internal\Operator\Orgs\GetOrgRulesetHistory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId🌀History());

        return $operator->call($arguments['org'], $arguments['ruleset_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getWebhookDelivery(array $params): HookDelivery
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
        $operator = new Internal\Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());

        return $operator->call($arguments['org'], $arguments['hook_id'], $arguments['delivery_id']);
    }

    /** @return */
    public function getOrgRulesetVersion(array $params): RulesetVersion
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('ruleset_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ruleset_id');
        }

        $arguments['ruleset_id'] = $params['ruleset_id'];
        unset($params['ruleset_id']);
        if (array_key_exists('version_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: version_id');
        }

        $arguments['version_id'] = $params['version_id'];
        unset($params['version_id']);
        $operator = new Internal\Operator\Orgs\GetOrgRulesetVersion($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId🌀History🌀VersionId());

        return $operator->call($arguments['org'], $arguments['ruleset_id'], $arguments['version_id']);
    }
}
