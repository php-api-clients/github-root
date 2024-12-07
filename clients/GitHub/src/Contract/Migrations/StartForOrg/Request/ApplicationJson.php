<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Migrations\StartForOrg\Request;

/**
 * @property array $repositories
 * @property ?bool $lockRepositories
 * @property ?bool $excludeMetadata
 * @property ?bool $excludeGitData
 * @property ?bool $excludeAttachments
 * @property ?bool $excludeReleases
 * @property ?bool $excludeOwnerProjects
 * @property ?bool $orgMetadataOnly
 * @property ?array $exclude
 */
interface ApplicationJson
{
}
