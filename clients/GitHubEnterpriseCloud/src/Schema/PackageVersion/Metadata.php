<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\PackageVersion;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Metadata
{
    public const SCHEMA_JSON = '{"title":"Package Version Metadata","required":["package_type"],"type":"object","properties":{"package_type":{"enum":["npm","maven","rubygems","docker","nuget","container"],"type":"string","examples":["docker"]},"container":{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}},"docker":{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'Package Version Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"package_type":"docker","container":{"tags":[null]},"docker":{"tag":[null]}}';
    public ?string $package_type;
    public Schema\PackageVersion\Metadata\Container $container;
    public Schema\PackageVersion\Metadata\Docker $docker;
    public function __construct(string $package_type, Schema\PackageVersion\Metadata\Container $container, Schema\PackageVersion\Metadata\Docker $docker)
    {
        $this->package_type = $package_type;
        $this->container = $container;
        $this->docker = $docker;
    }
}
