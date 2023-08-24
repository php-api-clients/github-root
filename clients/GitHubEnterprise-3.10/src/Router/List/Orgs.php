<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Orgs
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Observable<Schema\OrganizationSimple> | array{code: int}) */
    public function listForAuthenticatedUserListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Orgs::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLogListing(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\AuditLog::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\AuditLog::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀AuditLog();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\GetAuditLogListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\AuditLog::class]);
            $items    = $operator->call($arguments['org'], $arguments['phrase'], $arguments['include'], $arguments['after'], $arguments['before'], $arguments['order'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\OrgHook> */
    public function listWebhooksListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Hooks::class]);
            $items    = $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembersListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Members::class]);
            $items    = $operator->call($arguments['org'], $arguments['filter'], $arguments['role'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listOutsideCollaboratorsListing(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\OutsideCollaborators::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\OutsideCollaborators::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListOutsideCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\OutsideCollaborators::class]);
            $items    = $operator->call($arguments['org'], $arguments['filter'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequestsListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListPatGrantRequestsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests::class]);
            $items    = $operator->call($arguments['org'], $arguments['owner'], $arguments['repository'], $arguments['permission'], $arguments['last_used_before'], $arguments['last_used_after'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrant> */
    public function listPatGrantsListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListPatGrantsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens::class]);
            $items    = $operator->call($arguments['org'], $arguments['owner'], $arguments['repository'], $arguments['permission'], $arguments['last_used_before'], $arguments['last_used_after'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listPublicMembersListing(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PublicMembers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PublicMembers::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListPublicMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PublicMembers::class]);
            $items    = $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return (Observable<Schema\OrgMembership> | array{code: int}) */
    public function listMembershipsForAuthenticatedUserListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListMembershipsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Memberships\Orgs::class]);
            $items    = $operator->call($arguments['state'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\OrganizationSimple> */
    public function listForUserListing(array $params): iterable
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Orgs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Orgs::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs();
        }

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Orgs::class]);
            $items    = $operator->call($arguments['username'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRequestRepositoriesListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListPatGrantRequestRepositoriesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories::class]);
            $items    = $operator->call($arguments['org'], $arguments['pat_request_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRepositoriesListing(array $params): iterable
    {
        $matched   = true;
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Orgs\ListPatGrantRepositoriesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories::class]);
            $items    = $operator->call($arguments['org'], $arguments['pat_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
