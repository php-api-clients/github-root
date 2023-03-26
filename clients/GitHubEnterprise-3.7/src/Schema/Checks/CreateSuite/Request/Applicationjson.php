<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Checks\CreateSuite\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["head_sha"],"type":"object","properties":{"head_sha":{"type":"string","description":"The sha of the head commit."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"head_sha":"generated_head_sha_null"}';
    /**
     * headSha: The sha of the head commit.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public string $headSha)
    {
    }
}
