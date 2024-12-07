<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Actions\UpdateSelfHostedRunnerGroupForOrg\Request;

/**
 * @property string $name
 * @property ?string $visibility
 * @property ?bool $allowsPublicRepositories
 * @property ?bool $restrictedToWorkflows
 * @property ?array $selectedWorkflows
 */
interface ApplicationJson
{
}
