<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\DependencyGraphSpdxSbom\Sbom\Packages;

final class ExternalRefs extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs $error)
    {
    }
}
