<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int|float $id
 * @property string $name
 * @property string $visibility
 * @property bool $default
 * @property ?string $selectedRepositoriesUrl
 * @property string $runnersUrl
 * @property ?string $hostedRunnersUrl
 * @property bool $inherited
 * @property ?bool $inheritedAllowsPublicRepositories
 * @property bool $allowsPublicRepositories
 * @property ?bool $workflowRestrictionsReadOnly
 * @property ?bool $restrictedToWorkflows
 * @property ?array $selectedWorkflows
 */
interface RunnerGroupsOrg
{
}
