<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CustomProperty;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\IssueType;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationFull;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationInvitation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RulesetVersion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig;
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
    public function listAttestations(string $before, string $after, string $org, string $subjectDigest, string $predicateType, int $perPage): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListAttestations()->call($before, $after, $org, $subjectDigest, $predicateType, $perPage);
    }

    /** @return Observable<Schema\AuditLogEvent> */
    public function getAuditLog(string $org, string $phrase, string $include, string $after, string $before, string $order, int $perPage): iterable
    {
        return $this->operators->orgs👷GetAuditLog()->call($org, $phrase, $include, $after, $before, $order, $perPage);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listBlockedUsers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListBlockedUsers()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listBlockedUsersListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListBlockedUsersListing()->call($org, $perPage, $page);
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

    /** @return Observable<Schema\PushRuleBypassRequest> */
    public function listPushBypassRequests(string $org, string $repositoryName, string $reviewer, string $requester, string $timePeriod, string $requestStatus, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPushBypassRequests()->call($org, $repositoryName, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
    }

    /** @return Observable<Schema\PushRuleBypassRequest> */
    public function listPushBypassRequestsListing(string $org, string $repositoryName, string $reviewer, string $requester, string $timePeriod, string $requestStatus, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPushBypassRequestsListing()->call($org, $repositoryName, $reviewer, $requester, $timePeriod, $requestStatus, $perPage, $page);
    }

    /** @return Observable<Schema\CredentialAuthorization> */
    public function listSamlSsoAuthorizations(string $org, int $page, string $login, int $perPage): iterable
    {
        return $this->operators->orgs👷ListSamlSsoAuthorizations()->call($org, $page, $login, $perPage);
    }

    /** @return Observable<Schema\CredentialAuthorization> */
    public function listSamlSsoAuthorizationsListing(string $org, int $page, string $login, int $perPage): iterable
    {
        return $this->operators->orgs👷ListSamlSsoAuthorizationsListing()->call($org, $page, $login, $perPage);
    }

    /** @return */
    public function removeSamlSsoAuthorization(string $org, int $credentialId): WithoutBody
    {
        return $this->operators->orgs👷RemoveSamlSsoAuthorization()->call($org, $credentialId);
    }

    /** @return */
    public function listCustomRepoRoles(string $org): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->orgs👷ListCustomRepoRoles()->call($org);
    }

    /** @return */
    public function createCustomRepoRole(string $org, array $params): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷CreateCustomRepoRole()->call($org, $params);
    }

    /** @return */
    public function getCustomRepoRole(string $org, int $roleId): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷GetCustomRepoRole()->call($org, $roleId);
    }

    /** @return */
    public function deleteCustomRepoRole(string $org, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷DeleteCustomRepoRole()->call($org, $roleId);
    }

    /** @return */
    public function updateCustomRepoRole(string $org, int $roleId, array $params): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷UpdateCustomRepoRole()->call($org, $roleId, $params);
    }

    /** @return */
    public function createCustomRole(string $org, array $params): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷CreateCustomRole()->call($org, $params);
    }

    /** @return */
    public function getCustomRole(string $org, int $roleId): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷GetCustomRole()->call($org, $roleId);
    }

    /** @return */
    public function deleteCustomRole(string $org, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷DeleteCustomRole()->call($org, $roleId);
    }

    /** @return */
    public function updateCustomRole(string $org, int $roleId, array $params): OrganizationCustomRepositoryRole
    {
        return $this->operators->orgs👷UpdateCustomRole()->call($org, $roleId, $params);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listFailedInvitations(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListFailedInvitations()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listFailedInvitationsListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListFailedInvitationsListing()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\RepositoryFineGrainedPermission> */
    public function listFineGrainedPermissions(string $org): iterable
    {
        return $this->operators->orgs👷ListFineGrainedPermissions()->call($org);
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
    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷RedeliverWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    /** @return */
    public function pingWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷PingWebhook()->call($org, $hookId);
    }

    /** @return */
    public function listAppInstallations(string $org, int $perPage, int $page): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListAppInstallations()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitations(string $org, int $perPage, int $page, string $role, string $invitationSource): iterable
    {
        return $this->operators->orgs👷ListPendingInvitations()->call($org, $perPage, $page, $role, $invitationSource);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitationsListing(string $org, int $perPage, int $page, string $role, string $invitationSource): iterable
    {
        return $this->operators->orgs👷ListPendingInvitationsListing()->call($org, $perPage, $page, $role, $invitationSource);
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

    /** @return Observable<Schema\Team> */
    public function listInvitationTeams(string $org, int $invitationId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListInvitationTeams()->call($org, $invitationId, $perPage, $page);
    }

    /** @return Observable<Schema\Team> */
    public function listInvitationTeamsListing(string $org, int $invitationId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListInvitationTeamsListing()->call($org, $invitationId, $perPage, $page);
    }

    /** @return Observable<Schema\IssueType> */
    public function listIssueTypes(string $org): iterable
    {
        return $this->operators->orgs👷ListIssueTypes()->call($org);
    }

    /** @return */
    public function createIssueType(string $org, array $params): IssueType
    {
        return $this->operators->orgs👷CreateIssueType()->call($org, $params);
    }

    /** @return */
    public function updateIssueType(string $org, int $issueTypeId, array $params): IssueType
    {
        return $this->operators->orgs👷UpdateIssueType()->call($org, $issueTypeId, $params);
    }

    /** @return */
    public function deleteIssueType(string $org, int $issueTypeId): WithoutBody
    {
        return $this->operators->orgs👷DeleteIssueType()->call($org, $issueTypeId);
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

    /** @return Observable<Schema\OrganizationFineGrainedPermission> */
    public function listOrganizationFineGrainedPermissions(string $org): iterable
    {
        return $this->operators->orgs👷ListOrganizationFineGrainedPermissions()->call($org);
    }

    /** @return */
    public function listOrgRoles(string $org): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok
    {
        return $this->operators->orgs👷ListOrgRoles()->call($org);
    }

    /** @return */
    public function createCustomOrganizationRole(string $org, array $params): OrganizationRole
    {
        return $this->operators->orgs👷CreateCustomOrganizationRole()->call($org, $params);
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

    /** @return */
    public function deleteCustomOrganizationRole(string $org, int $roleId): WithoutBody
    {
        return $this->operators->orgs👷DeleteCustomOrganizationRole()->call($org, $roleId);
    }

    /** @return */
    public function patchCustomOrganizationRole(string $org, int $roleId, array $params): OrganizationRole
    {
        return $this->operators->orgs👷PatchCustomOrganizationRole()->call($org, $roleId, $params);
    }

    /** @return Observable<Schema\TeamRoleAssignment>|WithoutBody */
    public function listOrgRoleTeams(string $org, int $roleId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListOrgRoleTeams()->call($org, $roleId, $perPage, $page);
    }

    /** @return Observable<Schema\TeamRoleAssignment>|WithoutBody */
    public function listOrgRoleTeamsListing(string $org, int $roleId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListOrgRoleTeamsListing()->call($org, $roleId, $perPage, $page);
    }

    /** @return Observable<Schema\UserRoleAssignment>|WithoutBody */
    public function listOrgRoleUsers(string $org, int $roleId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListOrgRoleUsers()->call($org, $roleId, $perPage, $page);
    }

    /** @return Observable<Schema\UserRoleAssignment>|WithoutBody */
    public function listOrgRoleUsersListing(string $org, int $roleId, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListOrgRoleUsersListing()->call($org, $roleId, $perPage, $page);
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
    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->orgs👷ConvertMemberToOutsideCollaborator()->call($org, $username, $params);
    }

    /** @return */
    public function removeOutsideCollaborator(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveOutsideCollaborator()->call($org, $username);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequests(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, array $tokenId, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequests()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $tokenId, $perPage, $page, $sort, $direction);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequestsListing(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, array $tokenId, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestsListing()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $tokenId, $perPage, $page, $sort, $direction);
    }

    /** @return */
    public function reviewPatGrantRequestsInBulk(string $org, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷ReviewPatGrantRequestsInBulk()->call($org, $params);
    }

    /** @return */
    public function reviewPatGrantRequest(string $org, int $patRequestId, array $params): WithoutBody
    {
        return $this->operators->orgs👷ReviewPatGrantRequest()->call($org, $patRequestId, $params);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRequestRepositories(string $org, int $patRequestId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestRepositories()->call($org, $patRequestId, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRequestRepositoriesListing(string $org, int $patRequestId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestRepositoriesListing()->call($org, $patRequestId, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrant> */
    public function listPatGrants(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, array $tokenId, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrants()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $tokenId, $perPage, $page, $sort, $direction);
    }

    /** @return Observable<Schema\OrganizationProgrammaticAccessGrant> */
    public function listPatGrantsListing(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, array $tokenId, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantsListing()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $tokenId, $perPage, $page, $sort, $direction);
    }

    /** @return */
    public function updatePatAccesses(string $org, array $params): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷UpdatePatAccesses()->call($org, $params);
    }

    /** @return */
    public function updatePatAccess(string $org, int $patId, array $params): WithoutBody
    {
        return $this->operators->orgs👷UpdatePatAccess()->call($org, $patId, $params);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRepositories(string $org, int $patId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRepositories()->call($org, $patId, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listPatGrantRepositoriesListing(string $org, int $patId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRepositoriesListing()->call($org, $patId, $perPage, $page);
    }

    /** @return Observable<Schema\CustomProperty> */
    public function getAllCustomProperties(string $org): iterable
    {
        return $this->operators->orgs👷GetAllCustomProperties()->call($org);
    }

    /** @return Observable<Schema\CustomProperty> */
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

    /** @return Observable<Schema\OrgRepoCustomPropertyValues> */
    public function listCustomPropertiesValuesForRepos(string $org, string $repositoryQuery, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListCustomPropertiesValuesForRepos()->call($org, $repositoryQuery, $perPage, $page);
    }

    /** @return Observable<Schema\OrgRepoCustomPropertyValues> */
    public function listCustomPropertiesValuesForReposListing(string $org, string $repositoryQuery, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListCustomPropertiesValuesForReposListing()->call($org, $repositoryQuery, $perPage, $page);
    }

    /** @return */
    public function createOrUpdateCustomPropertiesValuesForRepos(string $org, array $params): WithoutBody
    {
        return $this->operators->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos()->call($org, $params);
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

    /** @return Observable<Schema\RepositoryFineGrainedPermission> */
    public function listRepoFineGrainedPermissions(string $org): iterable
    {
        return $this->operators->orgs👷ListRepoFineGrainedPermissions()->call($org);
    }

    /** @return Observable<Schema\RulesetVersion> */
    public function getOrgRulesetHistory(string $org, int $rulesetId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷GetOrgRulesetHistory()->call($org, $rulesetId, $perPage, $page);
    }

    /** @return Observable<Schema\RulesetVersion> */
    public function getOrgRulesetHistoryListing(string $org, int $rulesetId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷GetOrgRulesetHistoryListing()->call($org, $rulesetId, $perPage, $page);
    }

    /** @return */
    public function getOrgRulesetVersion(string $org, int $rulesetId, int $versionId): RulesetVersion
    {
        return $this->operators->orgs👷GetOrgRulesetVersion()->call($org, $rulesetId, $versionId);
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
    public function enableOrDisableSecurityProductOnAllOrgRepos(string $org, string $securityProduct, string $enablement, array $params): WithoutBody
    {
        return $this->operators->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos()->call($org, $securityProduct, $enablement, $params);
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
