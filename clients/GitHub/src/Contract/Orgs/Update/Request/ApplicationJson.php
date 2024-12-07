<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Orgs\Update\Request;

/**
 * @property ?string $billingEmail
 * @property ?string $company
 * @property ?string $email
 * @property ?string $twitterUsername
 * @property ?string $location
 * @property ?string $name
 * @property ?string $description
 * @property ?bool $hasOrganizationProjects
 * @property ?bool $hasRepositoryProjects
 * @property ?string $defaultRepositoryPermission
 * @property ?bool $membersCanCreateRepositories
 * @property ?bool $membersCanCreateInternalRepositories
 * @property ?bool $membersCanCreatePrivateRepositories
 * @property ?bool $membersCanCreatePublicRepositories
 * @property ?string $membersAllowedRepositoryCreationType
 * @property ?bool $membersCanCreatePages
 * @property ?bool $membersCanCreatePublicPages
 * @property ?bool $membersCanCreatePrivatePages
 * @property ?bool $membersCanForkPrivateRepositories
 * @property ?bool $webCommitSignoffRequired
 * @property ?string $blog
 * @property ?bool $advancedSecurityEnabledForNewRepositories
 * @property ?bool $dependabotAlertsEnabledForNewRepositories
 * @property ?bool $dependabotSecurityUpdatesEnabledForNewRepositories
 * @property ?bool $dependencyGraphEnabledForNewRepositories
 * @property ?bool $secretScanningEnabledForNewRepositories
 * @property ?bool $secretScanningPushProtectionEnabledForNewRepositories
 * @property ?bool $secretScanningPushProtectionCustomLinkEnabled
 * @property ?string $secretScanningPushProtectionCustomLink
 * @property ?bool $deployKeysEnabledForRepositories
 */
interface ApplicationJson
{
}
