<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\CustomProperty;
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

    /** @return */
    public function listCustomRepoRoles(string $org): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json
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
    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json
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
    public function reviewPatGrantRequestsInBulk(string $org, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json
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
    public function updatePatAccesses(string $org, array $params): \ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json
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
