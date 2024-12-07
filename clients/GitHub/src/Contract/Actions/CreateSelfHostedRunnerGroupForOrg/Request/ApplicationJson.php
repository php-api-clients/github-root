<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Actions\CreateSelfHostedRunnerGroupForOrg\Request;

/**
 * @property string $name
 * @property ?string $visibility
 * @property ?array $selectedRepositoryIds
 * @property ?array $runners
 * @property ?bool $allowsPublicRepositories
 * @property ?bool $restrictedToWorkflows
 * @property ?array $selectedWorkflows
 */
interface ApplicationJson
{
}
