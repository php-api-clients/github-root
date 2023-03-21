<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\GitTag;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Object_
{
    public const SCHEMA_JSON = '{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","type":"generated_type_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public string $sha, public string $type, public string $url)
    {
    }
}
