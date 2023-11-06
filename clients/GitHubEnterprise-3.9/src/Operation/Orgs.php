<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Orgs
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\OrganizationSimple>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->orgs👷List_()->call($since, $perPage);
    }

    public function listCustomRoles(string $organizationId): Ok
    {
        return $this->operators->orgs👷ListCustomRoles()->call($organizationId);
    }

    public function get(string $org): OrganizationFull
    {
        return $this->operators->orgs👷Get()->call($org);
    }

    public function delete(string $org): Json
    {
        return $this->operators->orgs👷Delete()->call($org);
    }

    public function update(string $org, array $params): OrganizationFull
    {
        return $this->operators->orgs👷Update()->call($org, $params);
    }

    /** @return iterable<int,Schema\AuditLogEvent> */
    public function getAuditLog(string $org, string $phrase, string $include, string $after, string $before, string $order, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷GetAuditLog()->call($org, $phrase, $include, $after, $before, $order, $perPage, $page);
    }

    /** @return iterable<int,Schema\AuditLogEvent> */
    public function getAuditLogListing(string $org, string $phrase, string $include, string $after, string $before, string $order, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷GetAuditLogListing()->call($org, $phrase, $include, $after, $before, $order, $perPage, $page);
    }

    public function listCustomRepoRoles(string $org): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->orgs👷ListCustomRepoRoles()->call($org);
    }

    public function createCustomRepoRole(string $org, array $params): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷CreateCustomRepoRole()->call($org, $params);
    }

    public function getCustomRepoRole(string $org, int $roleId): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷GetCustomRepoRole()->call($org, $roleId);
    }

    public function deleteCustomRepoRole(string $org, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷DeleteCustomRepoRole()->call($org, $roleId);
    }

    public function updateCustomRepoRole(string $org, int $roleId, array $params): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷UpdateCustomRepoRole()->call($org, $roleId, $params);
    }

    /** @return iterable<int,Schema\OrgHook> */
    public function listWebhooks(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooks()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgHook> */
    public function listWebhooksListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooksListing()->call($org, $perPage, $page);
    }

    public function createWebhook(string $org, array $params): OrgHook
    {
        return $this->operators->orgs👷CreateWebhook()->call($org, $params);
    }

    public function getWebhook(string $org, int $hookId): OrgHook
    {
        return $this->operators->orgs👷GetWebhook()->call($org, $hookId);
    }

    public function deleteWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷DeleteWebhook()->call($org, $hookId);
    }

    public function updateWebhook(string $org, int $hookId, array $params): OrgHook
    {
        return $this->operators->orgs👷UpdateWebhook()->call($org, $hookId, $params);
    }

    public function getWebhookConfigForOrg(string $org, int $hookId): WebhookConfig
    {
        return $this->operators->orgs👷GetWebhookConfigForOrg()->call($org, $hookId);
    }

    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): WebhookConfig
    {
        return $this->operators->orgs👷UpdateWebhookConfigForOrg()->call($org, $hookId, $params);
    }

    /** @return iterable<int,Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->orgs👷ListWebhookDeliveries()->call($org, $hookId, $cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): HookDelivery
    {
        return $this->operators->orgs👷GetWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷RedeliverWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    public function pingWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷PingWebhook()->call($org, $hookId);
    }

    public function listAppInstallations(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListAppInstallations()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembers()->call($org, $filter, $role, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listMembersListing(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembersListing()->call($org, $filter, $role, $perPage, $page);
    }

    public function checkMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckMembershipForUser()->call($org, $username);
    }

    public function removeMember(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveMember()->call($org, $username);
    }

    public function getMembershipForUser(string $org, string $username): OrgMembership
    {
        return $this->operators->orgs👷GetMembershipForUser()->call($org, $username);
    }

    public function setMembershipForUser(string $org, string $username, array $params): OrgMembership
    {
        return $this->operators->orgs👷SetMembershipForUser()->call($org, $username, $params);
    }

    public function removeMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveMembershipForUser()->call($org, $username);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaborators()->call($org, $filter, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listOutsideCollaboratorsListing(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaboratorsListing()->call($org, $filter, $perPage, $page);
    }

    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->orgs👷ConvertMemberToOutsideCollaborator()->call($org, $username, $params);
    }

    public function removeOutsideCollaborator(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveOutsideCollaborator()->call($org, $username);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listPublicMembers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembers()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listPublicMembersListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembersListing()->call($org, $perPage, $page);
    }

    public function checkPublicMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckPublicMembershipForUser()->call($org, $username);
    }

    public function setPublicMembershipForAuthenticatedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷SetPublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    public function removePublicMembershipForAuthenticatedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemovePublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    /** @return iterable<int,Schema\RepositoryFineGrainedPermission> */
    public function listRepoFineGrainedPermissions(string $org): iterable
    {
        return $this->operators->orgs👷ListRepoFineGrainedPermissions()->call($org);
    }

    /** @return iterable<int,Schema\TeamSimple> */
    public function listSecurityManagerTeams(string $org): iterable
    {
        return $this->operators->orgs👷ListSecurityManagerTeams()->call($org);
    }

    public function addSecurityManagerTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷AddSecurityManagerTeam()->call($org, $teamSlug);
    }

    public function removeSecurityManagerTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷RemoveSecurityManagerTeam()->call($org, $teamSlug);
    }

    public function enableOrDisableSecurityProductOnAllOrgRepos(string $org, string $securityProduct, string $enablement): WithoutBody
    {
        return $this->operators->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos()->call($org, $securityProduct, $enablement);
    }

    /** @return iterable<int,Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUser()->call($state, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUserListing(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUserListing()->call($state, $perPage, $page);
    }

    public function getMembershipForAuthenticatedUser(string $org): OrgMembership
    {
        return $this->operators->orgs👷GetMembershipForAuthenticatedUser()->call($org);
    }

    public function updateMembershipForAuthenticatedUser(string $org, array $params): OrgMembership
    {
        return $this->operators->orgs👷UpdateMembershipForAuthenticatedUser()->call($org, $params);
    }

    /** @return iterable<int,Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationSimple> */
    public function listForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationSimple> */
    public function listForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUserListing()->call($username, $perPage, $page);
    }
}
