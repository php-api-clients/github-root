<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;

final class Orgs
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\OrganizationSimple>|array{code:int} */
    public function list(int $since, int $perPage): iterable
    {
        return $this->operators->orgs👷List_()->call($since, $perPage);
    }

    /** @return Schema\OrganizationFull */
    public function get(string $org): OrganizationFull|array
    {
        return $this->operators->orgs👷Get()->call($org);
    }

    /** @return Schema\OrganizationFull */
    public function update(string $org, array $params): OrganizationFull|array
    {
        return $this->operators->orgs👷Update()->call($org, $params);
    }

    /** @return iterable<Schema\OrgHook> */
    public function listWebhooks(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooks()->call($org, $perPage, $page);
    }

    /** @return iterable<Schema\OrgHook> */
    public function listWebhooksListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooksListing()->call($org, $perPage, $page);
    }

    /** @return Schema\OrgHook */
    public function createWebhook(string $org, array $params): OrgHook|array
    {
        return $this->operators->orgs👷CreateWebhook()->call($org, $params);
    }

    /** @return Schema\OrgHook */
    public function getWebhook(string $org, int $hookId): OrgHook|array
    {
        return $this->operators->orgs👷GetWebhook()->call($org, $hookId);
    }

    /** @return array{code:int} */
    public function deleteWebhook(string $org, int $hookId): array
    {
        return $this->operators->orgs👷DeleteWebhook()->call($org, $hookId);
    }

    /** @return Schema\OrgHook */
    public function updateWebhook(string $org, int $hookId, array $params): OrgHook|array
    {
        return $this->operators->orgs👷UpdateWebhook()->call($org, $hookId, $params);
    }

    /** @return Schema\WebhookConfig */
    public function getWebhookConfigForOrg(string $org, int $hookId): WebhookConfig|array
    {
        return $this->operators->orgs👷GetWebhookConfigForOrg()->call($org, $hookId);
    }

    /** @return Schema\WebhookConfig */
    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): WebhookConfig|array
    {
        return $this->operators->orgs👷UpdateWebhookConfigForOrg()->call($org, $hookId, $params);
    }

    /** @return iterable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, int $perPage): iterable
    {
        return $this->operators->orgs👷ListWebhookDeliveries()->call($org, $hookId, $cursor, $perPage);
    }

    /** @return Schema\HookDelivery */
    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): HookDelivery|array
    {
        return $this->operators->orgs👷GetWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted */
    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): Accepted|array
    {
        return $this->operators->orgs👷RedeliverWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return array{code:int} */
    public function pingWebhook(string $org, int $hookId): array
    {
        return $this->operators->orgs👷PingWebhook()->call($org, $hookId);
    }

    /** @return Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok */
    public function listAppInstallations(string $org, int $perPage, int $page): Ok|array
    {
        return $this->operators->orgs👷ListAppInstallations()->call($org, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembers()->call($org, $filter, $role, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listMembersListing(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembersListing()->call($org, $filter, $role, $perPage, $page);
    }

    /** @return array{code:int}|array{code:int,location:string} */
    public function checkMembershipForUser(string $org, string $username): array
    {
        return $this->operators->orgs👷CheckMembershipForUser()->call($org, $username);
    }

    /** @return array{code:int} */
    public function removeMember(string $org, string $username): array
    {
        return $this->operators->orgs👷RemoveMember()->call($org, $username);
    }

    /** @return Schema\OrgMembership */
    public function getMembershipForUser(string $org, string $username): OrgMembership|array
    {
        return $this->operators->orgs👷GetMembershipForUser()->call($org, $username);
    }

    /** @return Schema\OrgMembership */
    public function setMembershipForUser(string $org, string $username, array $params): OrgMembership|array
    {
        return $this->operators->orgs👷SetMembershipForUser()->call($org, $username, $params);
    }

    /** @return array{code:int} */
    public function removeMembershipForUser(string $org, string $username): array
    {
        return $this->operators->orgs👷RemoveMembershipForUser()->call($org, $username);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaborators()->call($org, $filter, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listOutsideCollaboratorsListing(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaboratorsListing()->call($org, $filter, $perPage, $page);
    }

    /** @return Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): Json|array
    {
        return $this->operators->orgs👷ConvertMemberToOutsideCollaborator()->call($org, $username, $params);
    }

    /** @return array{code:int} */
    public function removeOutsideCollaborator(string $org, string $username): array
    {
        return $this->operators->orgs👷RemoveOutsideCollaborator()->call($org, $username);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listPublicMembers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembers()->call($org, $perPage, $page);
    }

    /** @return iterable<Schema\SimpleUser> */
    public function listPublicMembersListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembersListing()->call($org, $perPage, $page);
    }

    /** @return array{code:int} */
    public function checkPublicMembershipForUser(string $org, string $username): array
    {
        return $this->operators->orgs👷CheckPublicMembershipForUser()->call($org, $username);
    }

    /** @return array{code:int} */
    public function setPublicMembershipForAuthenticatedUser(string $org, string $username): array
    {
        return $this->operators->orgs👷SetPublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    /** @return array{code:int} */
    public function removePublicMembershipForAuthenticatedUser(string $org, string $username): array
    {
        return $this->operators->orgs👷RemovePublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    /** @return iterable<Schema\OrgMembership>|array{code:int} */
    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUser()->call($state, $perPage, $page);
    }

    /** @return iterable<Schema\OrgMembership>|array{code:int} */
    public function listMembershipsForAuthenticatedUserListing(string $state, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUserListing()->call($state, $perPage, $page);
    }

    /** @return Schema\OrgMembership */
    public function getMembershipForAuthenticatedUser(string $org): OrgMembership|array
    {
        return $this->operators->orgs👷GetMembershipForAuthenticatedUser()->call($org);
    }

    /** @return Schema\OrgMembership */
    public function updateMembershipForAuthenticatedUser(string $org, array $params): OrgMembership|array
    {
        return $this->operators->orgs👷UpdateMembershipForAuthenticatedUser()->call($org, $params);
    }

    /** @return iterable<Schema\OrganizationSimple>|array{code:int} */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<Schema\OrganizationSimple>|array{code:int} */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<Schema\OrganizationSimple> */
    public function listForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<Schema\OrganizationSimple> */
    public function listForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUserListing()->call($username, $perPage, $page);
    }
}
