<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class RepositoryAdvisoryEcosystems
{
    public const SCHEMA_JSON = '{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The package\'s language or package management ecosystem.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
