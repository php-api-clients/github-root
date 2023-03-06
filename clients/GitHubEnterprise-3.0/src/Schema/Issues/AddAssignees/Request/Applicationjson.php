<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Issues\AddAssignees\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"assignees":{"type":"array","items":{"type":"string"},"description":"Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"assignees":["generated_assignees"]}';
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     * @var array<string>
     */
    public ?array $assignees;
    public function __construct(array $assignees)
    {
        $this->assignees = $assignees;
    }
}
