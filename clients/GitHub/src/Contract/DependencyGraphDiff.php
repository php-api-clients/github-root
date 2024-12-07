<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $changeType
 * @property string $manifest
 * @property string $ecosystem
 * @property string $name
 * @property string $version
 * @property ?string $packageUrl
 * @property ?string $license
 * @property ?string $sourceRepositoryUrl
 * @property array $vulnerabilities
 * @property string $scope
 */
interface DependencyGraphDiff
{
}
