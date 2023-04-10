<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Group;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Members
{
    public const SCHEMA_JSON = '{"required":["value","displayName"],"type":"object","properties":{"value":{"type":"string","description":"The local unique identifier for the member","examples":["23a35c27-23d3-4c03-b4c5-6443c09e7173"]},"displayName":{"type":"string","description":"The display name associated with the member","examples":["Monalisa Octocat"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"23a35c27-23d3-4c03-b4c5-6443c09e7173","displayName":"Monalisa Octocat"}';
    /**
     * value: The local unique identifier for the member
     * displayName: The display name associated with the member
     */
    public function __construct(public string $value, public string $displayName)
    {
    }
}
