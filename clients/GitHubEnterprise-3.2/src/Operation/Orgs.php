<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Operator;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Orgs
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(int $since, int $perPage): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\Orgs\List_::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\List_::class] = new Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->operator[Operator\Orgs\List_::class]->call($since, $perPage);
    }

    public function get(string $org): Schema\OrganizationFull
    {
        if (array_key_exists(Operator\Orgs\Get::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Get::class] = new Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Get::class]->call($org);
    }

    public function update(string $org, array $params): Schema\OrganizationFull
    {
        if (array_key_exists(Operator\Orgs\Update::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Update::class] = new Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Update::class]->call($org, $params);
    }

    public function listWebhooks(string $org, int $perPage, int $page): Schema\OrgHook
    {
        if (array_key_exists(Operator\Orgs\ListWebhooks::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhooks::class] = new Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\ListWebhooks::class]->call($org, $perPage, $page);
    }

    public function listWebhooksListing(string $org, int $perPage, int $page): Schema\OrgHook
    {
        if (array_key_exists(Operator\Orgs\ListWebhooksListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhooksListing::class] = new Operator\Orgs\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\ListWebhooksListing::class]->call($org, $perPage, $page);
    }

    public function createWebhook(string $org, array $params): Schema\OrgHook
    {
        if (array_key_exists(Operator\Orgs\CreateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CreateWebhook::class] = new Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\CreateWebhook::class]->call($org, $params);
    }

    public function getWebhook(string $org, int $hookId): Schema\OrgHook
    {
        if (array_key_exists(Operator\Orgs\GetWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhook::class] = new Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\GetWebhook::class]->call($org, $hookId);
    }

    public function deleteWebhook(string $org, int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\DeleteWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\DeleteWebhook::class] = new Operator\Orgs\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\DeleteWebhook::class]->call($org, $hookId);
    }

    public function updateWebhook(string $org, int $hookId, array $params): Schema\OrgHook
    {
        if (array_key_exists(Operator\Orgs\UpdateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateWebhook::class] = new Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\UpdateWebhook::class]->call($org, $hookId, $params);
    }

    public function getWebhookConfigForOrg(string $org, int $hookId): Schema\WebhookConfig
    {
        if (array_key_exists(Operator\Orgs\GetWebhookConfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhookConfigForOrg::class] = new Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Orgs\GetWebhookConfigForOrg::class]->call($org, $hookId);
    }

    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): Schema\WebhookConfig
    {
        if (array_key_exists(Operator\Orgs\UpdateWebhookConfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateWebhookConfigForOrg::class] = new Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Orgs\UpdateWebhookConfigForOrg::class]->call($org, $hookId, $params);
    }

    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, int $perPage): Schema\HookDeliveryItem
    {
        if (array_key_exists(Operator\Orgs\ListWebhookDeliveries::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhookDeliveries::class] = new Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->operator[Operator\Orgs\ListWebhookDeliveries::class]->call($org, $hookId, $cursor, $perPage);
    }

    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): Schema\HookDelivery
    {
        if (array_key_exists(Operator\Orgs\GetWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhookDelivery::class] = new Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->operator[Operator\Orgs\GetWebhookDelivery::class]->call($org, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Orgs\RedeliverWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RedeliverWebhookDelivery::class] = new Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->operator[Operator\Orgs\RedeliverWebhookDelivery::class]->call($org, $hookId, $deliveryId);
    }

    public function pingWebhook(string $org, int $hookId): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\PingWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\PingWebhook::class] = new Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->operator[Operator\Orgs\PingWebhook::class]->call($org, $hookId);
    }

    public function listAppInstallations(string $org, int $perPage, int $page): Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Orgs\ListAppInstallations::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListAppInstallations::class] = new Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->operator[Operator\Orgs\ListAppInstallations::class]->call($org, $perPage, $page);
    }

    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Orgs\ListMembers::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembers::class] = new Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->operator[Operator\Orgs\ListMembers::class]->call($org, $filter, $role, $perPage, $page);
    }

    public function listMembersListing(string $org, string $filter, string $role, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Orgs\ListMembersListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembersListing::class] = new Operator\Orgs\ListMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->operator[Operator\Orgs\ListMembersListing::class]->call($org, $filter, $role, $perPage, $page);
    }

    public function checkMembershipForUser(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\CheckMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CheckMembershipForUser::class] = new Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->operator[Operator\Orgs\CheckMembershipForUser::class]->call($org, $username);
    }

    public function removeMember(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveMember::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveMember::class] = new Operator\Orgs\RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveMember::class]->call($org, $username);
    }

    public function getMembershipForUser(string $org, string $username): Schema\OrgMembership
    {
        if (array_key_exists(Operator\Orgs\GetMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetMembershipForUser::class] = new Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\GetMembershipForUser::class]->call($org, $username);
    }

    public function setMembershipForUser(string $org, string $username, array $params): Schema\OrgMembership
    {
        if (array_key_exists(Operator\Orgs\SetMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\SetMembershipForUser::class] = new Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\SetMembershipForUser::class]->call($org, $username, $params);
    }

    public function removeMembershipForUser(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveMembershipForUser::class] = new Operator\Orgs\RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveMembershipForUser::class]->call($org, $username);
    }

    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Orgs\ListOutsideCollaborators::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListOutsideCollaborators::class] = new Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->operator[Operator\Orgs\ListOutsideCollaborators::class]->call($org, $filter, $perPage, $page);
    }

    public function listOutsideCollaboratorsListing(string $org, string $filter, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Orgs\ListOutsideCollaboratorsListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListOutsideCollaboratorsListing::class] = new Operator\Orgs\ListOutsideCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->operator[Operator\Orgs\ListOutsideCollaboratorsListing::class]->call($org, $filter, $perPage, $page);
    }

    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted
    {
        if (array_key_exists(Operator\Orgs\ConvertMemberToOutsideCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ConvertMemberToOutsideCollaborator::class] = new Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->operator[Operator\Orgs\ConvertMemberToOutsideCollaborator::class]->call($org, $username, $params);
    }

    public function removeOutsideCollaborator(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveOutsideCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveOutsideCollaborator::class] = new Operator\Orgs\RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveOutsideCollaborator::class]->call($org, $username);
    }

    public function listPublicMembers(string $org, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Orgs\ListPublicMembers::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPublicMembers::class] = new Operator\Orgs\ListPublicMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->operator[Operator\Orgs\ListPublicMembers::class]->call($org, $perPage, $page);
    }

    public function listPublicMembersListing(string $org, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Orgs\ListPublicMembersListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPublicMembersListing::class] = new Operator\Orgs\ListPublicMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->operator[Operator\Orgs\ListPublicMembersListing::class]->call($org, $perPage, $page);
    }

    public function checkPublicMembershipForUser(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\CheckPublicMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CheckPublicMembershipForUser::class] = new Operator\Orgs\CheckPublicMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->operator[Operator\Orgs\CheckPublicMembershipForUser::class]->call($org, $username);
    }

    public function setPublicMembershipForAuthenticatedUser(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\SetPublicMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\SetPublicMembershipForAuthenticatedUser::class] = new Operator\Orgs\SetPublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->operator[Operator\Orgs\SetPublicMembershipForAuthenticatedUser::class]->call($org, $username);
    }

    public function removePublicMembershipForAuthenticatedUser(string $org, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Orgs\RemovePublicMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemovePublicMembershipForAuthenticatedUser::class] = new Operator\Orgs\RemovePublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->operator[Operator\Orgs\RemovePublicMembershipForAuthenticatedUser::class]->call($org, $username);
    }

    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): Schema\OrgMembership
    {
        if (array_key_exists(Operator\Orgs\ListMembershipsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUser::class] = new Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUser::class]->call($state, $perPage, $page);
    }

    public function listMembershipsForAuthenticatedUserListing(string $state, int $perPage, int $page): Schema\OrgMembership
    {
        if (array_key_exists(Operator\Orgs\ListMembershipsForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUserListing::class] = new Operator\Orgs\ListMembershipsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUserListing::class]->call($state, $perPage, $page);
    }

    public function getMembershipForAuthenticatedUser(string $org): Schema\OrgMembership
    {
        if (array_key_exists(Operator\Orgs\GetMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetMembershipForAuthenticatedUser::class] = new Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\GetMembershipForAuthenticatedUser::class]->call($org);
    }

    public function updateMembershipForAuthenticatedUser(string $org, array $params): Schema\OrgMembership
    {
        if (array_key_exists(Operator\Orgs\UpdateMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateMembershipForAuthenticatedUser::class] = new Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\UpdateMembershipForAuthenticatedUser::class]->call($org, $params);
    }

    public function listForAuthenticatedUser(int $perPage, int $page): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\Orgs\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForAuthenticatedUser::class] = new Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listForAuthenticatedUserListing(int $perPage, int $page): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\Orgs\ListForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForAuthenticatedUserListing::class] = new Operator\Orgs\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForAuthenticatedUserListing::class]->call($perPage, $page);
    }

    public function listForUser(string $username, int $perPage, int $page): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\Orgs\ListForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForUser::class] = new Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForUser::class]->call($username, $perPage, $page);
    }

    public function listForUserListing(string $username, int $perPage, int $page): Schema\OrganizationSimple
    {
        if (array_key_exists(Operator\Orgs\ListForUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForUserListing::class] = new Operator\Orgs\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForUserListing::class]->call($username, $perPage, $page);
    }
}
