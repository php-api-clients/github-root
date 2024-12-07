<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Migrations\StartForAuthenticatedUser\Request;

/**
 * @property ?bool $lockRepositories
 * @property ?bool $excludeMetadata
 * @property ?bool $excludeGitData
 * @property ?bool $excludeAttachments
 * @property ?bool $excludeReleases
 * @property ?bool $excludeOwnerProjects
 * @property ?bool $orgMetadataOnly
 * @property ?array $exclude
 * @property array $repositories
 */
interface ApplicationJson
{
}
