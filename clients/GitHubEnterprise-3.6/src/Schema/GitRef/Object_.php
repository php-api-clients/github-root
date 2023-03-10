<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\GitRef;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Object_
{
    public const SCHEMA_JSON = '{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"generated_type","sha":"7638417db6d59f3c431d3e1f261cc637155684cd","url":"generated_url"}';
    /**
     * sha: SHA for the reference
     */
    public function __construct(public string $type, public string $sha, public string $url)
    {
    }
}
