<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class ProjectsV2ItemContentType
{
    public const SCHEMA_JSON = '{"title":"Projects v2 Item Content Type","enum":["Issue","PullRequest","DraftIssue"],"type":"string","description":"The type of content tracked in a project item"}';
    public const SCHEMA_TITLE = 'Projects v2 Item Content Type';
    public const SCHEMA_DESCRIPTION = 'The type of content tracked in a project item';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
