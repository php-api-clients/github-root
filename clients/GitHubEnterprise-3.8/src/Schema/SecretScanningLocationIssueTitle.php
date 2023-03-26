<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class SecretScanningLocationIssueTitle
{
    public const SCHEMA_JSON = '{"required":["issue_title_url"],"type":"object","properties":{"issue_title_url":{"type":"string","description":"The API URL to get the issue where the secret was detected.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"]}},"description":"Represents an \'issue_title\' secret scanning location type. This location type shows that a secret was detected in the title of an issue."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Represents an \'issue_title\' secret scanning location type. This location type shows that a secret was detected in the title of an issue.';
    public const SCHEMA_EXAMPLE_DATA = '{"issue_title_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/1347"}';
    /**
     * issueTitleUrl: The API URL to get the issue where the secret was detected.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('issue_title_url')] public string $issueTitleUrl)
    {
    }
}
