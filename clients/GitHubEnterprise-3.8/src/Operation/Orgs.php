<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
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

    /** @return Observable<Schema\OrganizationSimple>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->orgs👷List_()->call($since, $perPage);
    }

    /** @return */
    public function listCustomRoles(string $organizationId): Ok
    {
        return $this->operators->orgs👷ListCustomRoles()->call($organizationId);
    }

    /** @return */
    public function get(string $org): OrganizationFull
    {
        return $this->operators->orgs👷Get()->call($org);
    }

    /** @return */
    public function update(string $org, array $params): OrganizationFull
    {
        return $this->operators->orgs👷Update()->call($org, $params);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLog(string $org, string $phrase, string $include, string $after, string $before, string $order, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷GetAuditLog()->call($org, $phrase, $include, $after, $before, $order, $perPage, $page);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLogListing(string $org, string $phrase, string $include, string $after, string $before, string $order, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷GetAuditLogListing()->call($org, $phrase, $include, $after, $before, $order, $perPage, $page);
    }

    /** @return Observable<Schema\OrgHook> */
    public function listWebhooks(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooks()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\OrgHook> */
    public function listWebhooksListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooksListing()->call($org, $perPage, $page);
    }

    /** @return */
    public function createWebhook(string $org, array $params): OrgHook
    {
        return $this->operators->orgs👷CreateWebhook()->call($org, $params);
    }

    /** @return */
    public function getWebhook(string $org, int $hookId): OrgHook
    {
        return $this->operators->orgs👷GetWebhook()->call($org, $hookId);
    }

    /** @return */
    public function deleteWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷DeleteWebhook()->call($org, $hookId);
    }

    /** @return */
    public function updateWebhook(string $org, int $hookId, array $params): OrgHook
    {
        return $this->operators->orgs👷UpdateWebhook()->call($org, $hookId, $params);
    }

    /** @return */
    public function getWebhookConfigForOrg(string $org, int $hookId): WebhookConfig
    {
        return $this->operators->orgs👷GetWebhookConfigForOrg()->call($org, $hookId);
    }

    /** @return */
    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): WebhookConfig
    {
        return $this->operators->orgs👷UpdateWebhookConfigForOrg()->call($org, $hookId, $params);
    }

    /** @return Observable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->orgs👷ListWebhookDeliveries()->call($org, $hookId, $cursor, $redelivery, $perPage);
    }

    /** @return */
    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): HookDelivery
    {
        return $this->operators->orgs👷GetWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return */
    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): Json
    {
        return $this->operators->orgs👷RedeliverWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return */
    public function pingWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷PingWebhook()->call($org, $hookId);
    }

    /** @return */
    public function listAppInstallations(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListAppInstallations()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembers()->call($org, $filter, $role, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembersListing(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembersListing()->call($org, $filter, $role, $perPage, $page);
    }

    /** @return */
    public function checkMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckMembershipForUser()->call($org, $username);
    }

    /** @return */
    public function removeMember(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveMember()->call($org, $username);
    }

    /** @return */
    public function getMembershipForUser(string $org, string $username): OrgMembership
    {
        return $this->operators->orgs👷GetMembershipForUser()->call($org, $username);
    }

    /** @return */
    public function setMembershipForUser(string $org, string $username, array $params): OrgMembership
    {
        return $this->operators->orgs👷SetMembershipForUser()->call($org, $username, $params);
    }

    /** @return */
    public function removeMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveMembershipForUser()->call($org, $username);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaborators()->call($org, $filter, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listOutsideCollaboratorsListing(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaboratorsListing()->call($org, $filter, $perPage, $page);
    }

    /** @return */
    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->orgs👷ConvertMemberToOutsideCollaborator()->call($org, $username, $params);
    }

    /** @return */
    public function removeOutsideCollaborator(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveOutsideCollaborator()->call($org, $username);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listPublicMembers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembers()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listPublicMembersListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembersListing()->call($org, $perPage, $page);
    }

    /** @return */
    public function checkPublicMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckPublicMembershipForUser()->call($org, $username);
    }

    /** @return */
    public function setPublicMembershipForAuthenticatedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷SetPublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    /** @return */
    public function removePublicMembershipForAuthenticatedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemovePublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    /** @return Observable<Schema\TeamSimple> */
    public function listSecurityManagerTeams(string $org): iterable
    {
        return $this->operators->orgs👷ListSecurityManagerTeams()->call($org);
    }

    /** @return */
    public function addSecurityManagerTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷AddSecurityManagerTeam()->call($org, $teamSlug);
    }

    /** @return */
    public function removeSecurityManagerTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷RemoveSecurityManagerTeam()->call($org, $teamSlug);
    }

    /** @return */
    public function enableOrDisableSecurityProductOnAllOrgRepos(string $org, string $securityProduct, string $enablement): WithoutBody
    {
        return $this->operators->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos()->call($org, $securityProduct, $enablement);
    }

    /** @return Observable<Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUser()->call($state, $perPage, $page);
    }

    /** @return Observable<Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUserListing(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUserListing()->call($state, $perPage, $page);
    }

    /** @return */
    public function getMembershipForAuthenticatedUser(string $org): OrgMembership
    {
        return $this->operators->orgs👷GetMembershipForAuthenticatedUser()->call($org);
    }

    /** @return */
    public function updateMembershipForAuthenticatedUser(string $org, array $params): OrgMembership
    {
        return $this->operators->orgs👷UpdateMembershipForAuthenticatedUser()->call($org, $params);
    }

    /** @return Observable<Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\OrganizationSimple> */
    public function listForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUser()->call($username, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationSimple> */
    public function listForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUserListing()->call($username, $perPage, $page);
    }
}
