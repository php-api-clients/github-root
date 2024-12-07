<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\DependencyGraphSpdxSbom;

use ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo;

/**
 * @property string $spdxid
 * @property string $spdxVersion
 * @property ?string $comment
 * @property CreationInfo $creationInfo
 * @property string $name
 * @property string $dataLicense
 * @property string $documentNamespace
 * @property array $packages
 * @property ?array $relationships
 */
interface Sbom
{
}
