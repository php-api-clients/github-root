<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Schema\CustomProperty;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\OrganizationFull;
use ApiClients\Client\GitHub\Schema\OrganizationInvitation;
use ApiClients\Client\GitHub\Schema\OrganizationRole;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Orgs
{
    public function __construct(public Operators $operators)
    {
    }

    /** @return Observable<OrganizationSimple>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->orgs👷List_()->call($since, $perPage);
    }

    /** @return */
    public function get(string $org): OrganizationFull
    {
        return $this->operators->orgs👷Get()->call($org);
    }

    /** @return */
    public function delete(string $org): Json
    {
        return $this->operators->orgs👷Delete()->call($org);
    }

    /** @return */
    public function update(string $org, array $params): OrganizationFull
    {
        return $this->operators->orgs👷Update()->call($org, $params);
    }

    /** @return */
    public function listAttestations(string $before, string $after, string $org, string $subjectDigest, int $perPage): Ok
    {
        return $this->operators->orgs👷ListAttestations()->call($before, $after, $org, $subjectDigest, $perPage);
    }

    /** @return Observable<SimpleUser> */
    public function listBlockedUsers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListBlockedUsers()->call($org, $perPage, $page);
    }

    /** @return */
    public function checkBlockedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckBlockedUser()->call($org, $username);
    }

    /** @return */
    public function blockUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷BlockUser()->call($org, $username);
    }

    /** @return */
    public function unblockUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷UnblockUser()->call($org, $username);
    }

    /** @return Observable<OrganizationInvitation> */
    public function listFailedInvitations(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListFailedInvitations()->call($org, $perPage, $page);
    }

    /** @return Observable<OrgHook> */
    public function listWebhooks(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooks()->call($org, $perPage, $page);
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

    /** @return Observable<HookDeliveryItem> */
    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, int $perPage): iterable
    {
        return $this->operators->orgs👷ListWebhookDeliveries()->call($org, $hookId, $cursor, $perPage);
    }

    /** @return */
    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): HookDelivery
    {
        return $this->operators->orgs👷GetWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return */
    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): \ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷RedeliverWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return */
    public function pingWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷PingWebhook()->call($org, $hookId);
    }

    /** @return */
    public function listAppInstallations(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListAppInstallations()->call($org, $perPage, $page);
    }

    /** @return Observable<OrganizationInvitation> */
    public function listPendingInvitations(string $org, int $perPage, int $page, string $role, string $invitationSource): iterable
    {
        return $this->operators->orgs👷ListPendingInvitations()->call($org, $perPage, $page, $role, $invitationSource);
    }

    /** @return */
    public function createInvitation(string $org, array $params): OrganizationInvitation
    {
        return $this->operators->orgs👷CreateInvitation()->call($org, $params);
    }

    /** @return */
    public function cancelInvitation(string $org, int $invitationId): WithoutBody
    {
        return $this->operators->orgs👷CancelInvitation()->call($org, $invitationId);
    }

    /** @return Observable<Team> */
    public function listInvitationTeams(string $org, int $invitationId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListInvitationTeams()->call($org, $invitationId, $perPage, $page);
    }

    /** @return Observable<SimpleUser> */
    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembers()->call($org, $filter, $role, $perPage, $page);
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

    /** @return */
    public function listOrgRoles(string $org): \ApiClients\Client\GitHub\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListOrgRoles()->call($org);
    }

    /** @return */
    public function revokeAllOrgRolesTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷RevokeAllOrgRolesTeam()->call($org, $teamSlug);
    }

    /** @return */
    public function assignTeamToOrgRole(string $org, string $teamSlug, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷AssignTeamToOrgRole()->call($org, $teamSlug, $roleId);
    }

    /** @return */
    public function revokeOrgRoleTeam(string $org, string $teamSlug, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷RevokeOrgRoleTeam()->call($org, $teamSlug, $roleId);
    }

    /** @return */
    public function revokeAllOrgRolesUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RevokeAllOrgRolesUser()->call($org, $username);
    }

    /** @return */
    public function assignUserToOrgRole(string $org, string $username, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷AssignUserToOrgRole()->call($org, $username, $roleId);
    }

    /** @return */
    public function revokeOrgRoleUser(string $org, string $username, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷RevokeOrgRoleUser()->call($org, $username, $roleId);
    }

    /** @return */
    public function getOrgRole(string $org, int $roleId): OrganizationRole
    {
        return $this->operators->orgs👷GetOrgRole()->call($org, $roleId);
    }

    /** @return Observable<TeamRoleAssignment>|WithoutBody */
    public function listOrgRoleTeams(string $org, int $roleId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListOrgRoleTeams()->call($org, $roleId, $perPage, $page);
    }

    /** @return Observable<UserRoleAssignment>|WithoutBody */
    public function listOrgRoleUsers(string $org, int $roleId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListOrgRoleUsers()->call($org, $roleId, $perPage, $page);
    }

    /** @return Observable<SimpleUser> */
    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaborators()->call($org, $filter, $perPage, $page);
    }

    /** @return */
    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->orgs👷ConvertMemberToOutsideCollaborator()->call($org, $username, $params);
    }

    /** @return */
    public function removeOutsideCollaborator(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveOutsideCollaborator()->call($org, $username);
    }

    /** @return Observable<OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequests(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequests()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    /** @return */
    public function reviewPatGrantRequestsInBulk(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷ReviewPatGrantRequestsInBulk()->call($org, $params);
    }

    /** @return */
    public function reviewPatGrantRequest(string $org, int $patRequestId, array $params): WithoutBody
    {
        return $this->operators->orgs👷ReviewPatGrantRequest()->call($org, $patRequestId, $params);
    }

    /** @return Observable<MinimalRepository> */
    public function listPatGrantRequestRepositories(string $org, int $patRequestId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestRepositories()->call($org, $patRequestId, $perPage, $page);
    }

    /** @return Observable<OrganizationProgrammaticAccessGrant> */
    public function listPatGrants(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrants()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    /** @return */
    public function updatePatAccesses(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷UpdatePatAccesses()->call($org, $params);
    }

    /** @return */
    public function updatePatAccess(string $org, int $patId, array $params): WithoutBody
    {
        return $this->operators->orgs👷UpdatePatAccess()->call($org, $patId, $params);
    }

    /** @return Observable<MinimalRepository> */
    public function listPatGrantRepositories(string $org, int $patId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRepositories()->call($org, $patId, $perPage, $page);
    }

    /** @return Observable<CustomProperty> */
    public function getAllCustomProperties(string $org): iterable
    {
        return $this->operators->orgs👷GetAllCustomProperties()->call($org);
    }

    /** @return Observable<CustomProperty> */
    public function createOrUpdateCustomProperties(string $org, array $params): iterable
    {
        return $this->operators->orgs👷CreateOrUpdateCustomProperties()->call($org, $params);
    }

    /** @return */
    public function getCustomProperty(string $org, string $customPropertyName): CustomProperty
    {
        return $this->operators->orgs👷GetCustomProperty()->call($org, $customPropertyName);
    }

    /** @return */
    public function createOrUpdateCustomProperty(string $org, string $customPropertyName, array $params): CustomProperty
    {
        return $this->operators->orgs👷CreateOrUpdateCustomProperty()->call($org, $customPropertyName, $params);
    }

    /** @return */
    public function removeCustomProperty(string $org, string $customPropertyName): WithoutBody
    {
        return $this->operators->orgs👷RemoveCustomProperty()->call($org, $customPropertyName);
    }

    /** @return Observable<OrgRepoCustomPropertyValues> */
    public function listCustomPropertiesValuesForRepos(string $org, string $repositoryQuery, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListCustomPropertiesValuesForRepos()->call($org, $repositoryQuery, $perPage, $page);
    }

    /** @return */
    public function createOrUpdateCustomPropertiesValuesForRepos(string $org, array $params): WithoutBody
    {
        return $this->operators->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos()->call($org, $params);
    }

    /** @return Observable<SimpleUser> */
    public function listPublicMembers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembers()->call($org, $perPage, $page);
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

    /** @return Observable<TeamSimple> */
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
    public function enableOrDisableSecurityProductOnAllOrgRepos(string $org, string $securityProduct, string $enablement, array $params): WithoutBody
    {
        return $this->operators->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos()->call($org, $securityProduct, $enablement, $params);
    }

    /** @return Observable<OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUser()->call($state, $perPage, $page);
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

    /** @return Observable<OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<OrganizationSimple> */
    public function listForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUser()->call($username, $perPage, $page);
    }
}
