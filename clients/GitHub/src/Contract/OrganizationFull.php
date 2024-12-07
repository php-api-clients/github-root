<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationFull\Plan;

/**
 * @property string $login
 * @property int $id
 * @property string $nodeId
 * @property string $url
 * @property string $reposUrl
 * @property string $eventsUrl
 * @property string $hooksUrl
 * @property string $issuesUrl
 * @property string $membersUrl
 * @property string $publicMembersUrl
 * @property string $avatarUrl
 * @property ?string $description
 * @property ?string $name
 * @property ?string $company
 * @property ?string $blog
 * @property ?string $location
 * @property ?string $email
 * @property ?string $twitterUsername
 * @property ?bool $isVerified
 * @property bool $hasOrganizationProjects
 * @property bool $hasRepositoryProjects
 * @property int $publicRepos
 * @property int $publicGists
 * @property int $followers
 * @property int $following
 * @property string $htmlUrl
 * @property string $type
 * @property ?int $totalPrivateRepos
 * @property ?int $ownedPrivateRepos
 * @property ?int $privateGists
 * @property ?int $diskUsage
 * @property ?int $collaborators
 * @property ?string $billingEmail
 * @property ?Plan $plan
 * @property ?string $defaultRepositoryPermission
 * @property ?bool $membersCanCreateRepositories
 * @property ?bool $twoFactorRequirementEnabled
 * @property ?string $membersAllowedRepositoryCreationType
 * @property ?bool $membersCanCreatePublicRepositories
 * @property ?bool $membersCanCreatePrivateRepositories
 * @property ?bool $membersCanCreateInternalRepositories
 * @property ?bool $membersCanCreatePages
 * @property ?bool $membersCanCreatePublicPages
 * @property ?bool $membersCanCreatePrivatePages
 * @property ?bool $membersCanForkPrivateRepositories
 * @property ?bool $webCommitSignoffRequired
 * @property ?bool $advancedSecurityEnabledForNewRepositories
 * @property ?bool $dependabotAlertsEnabledForNewRepositories
 * @property ?bool $dependabotSecurityUpdatesEnabledForNewRepositories
 * @property ?bool $dependencyGraphEnabledForNewRepositories
 * @property ?bool $secretScanningEnabledForNewRepositories
 * @property ?bool $secretScanningPushProtectionEnabledForNewRepositories
 * @property ?bool $secretScanningPushProtectionCustomLinkEnabled
 * @property ?string $secretScanningPushProtectionCustomLink
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?string $archivedAt
 * @property ?bool $deployKeysEnabledForRepositories
 */
interface OrganizationFull
{
}
